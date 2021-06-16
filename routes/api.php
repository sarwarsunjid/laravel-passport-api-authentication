<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\EmployeeController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Route::post('/register', 'Auth\UserAuthController@register');
// Route::post('/login', 'Auth\UserAuthController@login');


//Route::apiResource('/employee', [App\Http\Controllers\Auth\EmployeeController::class])->middleware('auth:api');

Route::post('/login', [App\Http\Controllers\Auth\UserAuthController::class, 'login']);
Route::post('/register', [App\Http\Controllers\Auth\UserAuthController::class, 'register']);

