<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['namespace' => 'Ensino', 'prefix' => 'ensino'], function () {

    // All route for aluno namespace
    Route::group(['namespace' => 'Aluno', 'prefix' => 'aluno'], function () {

        Route::get(
            '/status',
            function (Request $request) {
                return response()->json([
                    'success' => true,
                    'message' => 'API versão v1',
                ], 200);
            }
        );

        // Route get authenticade user info
        Route::get(
            '/user',
            function (Request $request) {
                return $request->user();
            }
        );
    });
})->middleware(['auth:api', 'scope:view-user']);
