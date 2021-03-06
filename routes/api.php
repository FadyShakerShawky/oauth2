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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login',  [App\Http\Controllers\Auth\api\PassportController::class, 'login']);
Route::post('register',  [App\Http\Controllers\Auth\api\PassportController::class, 'register']);
 
Route::middleware('auth:api')->group(function () {
    Route::get('user',  [App\Http\Controllers\Auth\api\PassportController::class, 'details']);
});