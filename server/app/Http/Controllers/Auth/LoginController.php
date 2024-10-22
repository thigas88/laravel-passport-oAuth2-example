<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Exception;
use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {

        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if (
            method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)
        ) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            if ($request->hasSession()) {
                $request->session()->put('auth.password_confirmed_at', time());
            }

            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function validateLogin(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
    }

    /**
     * Customized function to attempt login with LDAP
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return boolean
     */
    public function attemptLogin(Request $request)
    {
        $userLdap = $this->attempLdap($request->username, $request->password);

        if ($userLdap) {
            $user = User::where('username', $request->username)->first();
            if (!$user) {
                $user = new User();
                $user->username = $userLdap[0]['uid'][0];
                $user->name = $userLdap[0]['cn'][0];
                $user->email = $userLdap[0]['mail'][0];
                $user->password = bcrypt($request->password);
                $user->save();
            } else {
                $user->password = bcrypt($request->password);
                $user->save();
            }

            Auth::loginUsingId($user->id);

            return Auth::check();
        }
        return false;
    }

    /**
     * Attemp LDAP login
     * 
     * @param string $username
     * @param string $password
     * @throws Exception
     * @return array|boolean
     */
    private function attempLdap($username, $password)
    {
        $ldapserverdsn =  "ldap://" . env('LDAP_HOST', 'ldap-ufvjm') . ":" . env('LDAP_PORT', 389);

        // using ldap bind
        $ldaprdn  = env('LDAP_USERNAME', 'cn=replica,dc=ufvjm,dc=edu,dc=br'); // 'cn=replica,dc=ufvjm,dc=edu,dc=br';     // ldap rdn or dn
        $ldappass = env('LDAP_PASSWORD', '123456');  // associated password
        $ldapsearch = env('LDAP_BASE_DN', 'dc=ufvjm,dc=edu,dc=br'); //'dc=ufvjm,dc=edu,dc=br';
        $ldapfilter = env('LDAP_FILTER', '(uid=%s)');

        // connect to ldap server
        $ldapconn = ldap_connect($ldapserverdsn)
            or throw new Exception("Could not connect to LDAP server.");

        ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($ldapconn, LDAP_OPT_REFERRALS, 0);

        if ($ldapconn) {
            // binding to ldap server

            try {
                ldap_bind($ldapconn, $ldaprdn, $ldappass);
                // verify binding
                $challenge = uniqid(rand());
                // Pesquisa usuário no LDAP
                $base = $ldapsearch;
                $search = sprintf($ldapfilter, $username);
                $attributes = array('mail', 'userPassword', 'uid', 'brPersonCPF', 'name');
                $result = ldap_search($ldapconn, $base, $search, $attributes) or die("Error in search query: " . ldap_error($ldapconn));
                $entries = ldap_get_entries($ldapconn, $result);

                // Caso o usuario não seja encontrado no LDAP, falha na autenticacao
                if ($entries['count'] != 1) {
                    return false;
                }

                $contaInstitucional = @$entries[0]['uid'][0];

                // Calcula o hash para a fornecida pelo Usuario
                $userResponse = md5($contaInstitucional . ':' . md5($password) . ':' . $challenge);

                $ldapUserPassword = str_replace('{', '', @$entries[0]['userpassword'][0]);

                list($type, $base64_hash) = explode('}', $ldapUserPassword);

                // Calcula o hash para senha do LDAP
                $hashLdap = bin2hex(base64_decode($base64_hash));
                $ldapResponse = md5("{$contaInstitucional}:{$hashLdap}:{$challenge}");

                // Testa se o hash do LDAP bate com o hash feito com a senha fornecida pelo usuario
                $authenticated = ($ldapResponse === $userResponse);

                // Caso nao bata, retorna false
                if (!$authenticated) {
                    return false;
                } else {
                    return $entries;
                }
            } catch (Exception $e) {
                throw new Exception("Could not bind to LDAP server. Details: " . $e->getMessage());
            }
        } else {
            return false;
        }
    }

    protected function credentials(Request $request)
    {
        return $request->only('username', 'password');
    }
}
