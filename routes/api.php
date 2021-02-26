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
Route::get('students/show/{id}', 'App\Http\Controllers\StudentController@show');
Route::post('students/store', 'App\Http\Controllers\StudentController@store');
Route::put('students/update/{id}', 'App\Http\Controllers\StudentController@update');
Route::delete('students/delete/{id}', 'App\Http\Controllers\StudentController@destroy');

Route::get('ratings', 'App\Http\Controllers\RatingController@index');
Route::get('ratings/show/{id}', 'App\Http\Controllers\RatingController@show');
Route::post('ratings/store', 'App\Http\Controllers\RatingController@store');
Route::put('ratings/update/{id}', 'App\Http\Controllers\RatingController@update');
Route::delete('ratings/delete/{id}', 'App\Http\Controllers\RatingController@destroy');

Route::get('ratings/{id}', 'App\Http\Controllers\RatingController@query');
