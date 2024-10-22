<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthenticationController extends Controller
{
    public $loginController;

    public function __construct(){
        $this->loginController = new LoginController();
    }

    /**
     * Handle an incoming authentication request.
     */
    public function login(Request $request)
    {

        try {
            $this->loginController->validateLogin($request);

            /**
             * Scopes for the token must be passed as an array by client application
             */
            if ($this->loginController->attemptLogin($request)) {
                // successfull authentication
                $user = User::find(Auth::user()->id);

                $scopes = request('scope') ? explode(' ', request('scope')) : ['view-user'];

                $user_token['token'] = $user->createToken('appToken', $scopes);

                return response()->json([
                    'success' => true,
                    'token' => $user_token,
                    'user' => $user,
                ], 200);
            } else {
                // failure to authenticate
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to authenticate. Credentials not found',
                ], 401);
            }

        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'success' => false,
                'message' => 'Failed to authenticate. ' . $th->getMessage(),
            ], 401);
        }


        
    }

    /**
     * Destroy an authenticated session
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        // ...
        if (Auth::user()) {
            $request->user()->token()->revoke();
            Auth::logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return response()->json([
                'success' => true,
                'message' => 'Logged out successfully',
            ], 200);
        }
    }
}
