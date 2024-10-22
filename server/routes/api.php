<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AuthenticationController;
use App\Http\Controllers\Api\PostsController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Version route V1
Route::group(['namespace' => 'Api', 'prefix' => 'v1'], function () {
    Route::get(
        '/status',
        function (Request $request) {
            return response()->json([
                'success' => true,
                'message' => 'API versão v1',
            ], 200);
        }
    );

    // // Route login for username and password instance
    Route::post('/login', [
        AuthenticationController::class,
        'login'
    ])->name('login');

    Route::post('/logout', [
        AuthenticationController::class,
        'logout'
    ])->name('logout')->middleware('auth:api');

    // Route get authenticade user info
    Route::get(
        '/user',
        function (Request $request) {
            return $request->user();
        }
    )->middleware(['auth:api', 'scope:view-user']);

    Route::get('/posts', [
        PostsController::class,
        'index'
    ])->name('posts')->middleware(['auth:api', 'scope:view-posts']);



    // Include routes internal
    require 'api/v1/app/client.php';
    require 'api/v1/ensino/aluno.php';
});


// Version route V2
Route::group(['namespace' => 'Api', 'prefix' => 'v2'], function () {
    // Include routes internal
    //require 'api/v2/ensino/aluno.php';
});
