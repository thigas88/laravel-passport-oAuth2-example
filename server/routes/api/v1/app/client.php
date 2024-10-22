<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Apps\ClientController;


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

Route::group(['namespace' => 'App', 'prefix' => 'app'], function () {

    // All route for aluno namespace
    Route::group(['namespace' => 'Client', 'prefix' => 'client'], function () {

        Route::get('/list', [
            ClientController::class,
            'index'
        ])->name('client.list');
    });
})->middleware(['client', 'scope:view-clients']);
