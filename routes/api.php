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

Route::get('students', 'App\Http\Controllers\StudentController@index');
Route::post('students/store', 'App\Http\Controllers\StudentController@store');
Route::put('students/update/{id}', 'App\Http\Controllers\StudentController@update');
Route::delete('students/delete/{id}', 'App\Http\Controllers\StudentController@destroy');
