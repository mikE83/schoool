<?php

use Illuminate\Http\Request;

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


 Route::get('courses',  ['uses' => 'StudentController@index']);
 Route::get('student/{id}', ['uses' => 'StudentController@show']);
  //$router->post('student/{id}/qualification', ['uses' => 'StudentController@addQualification']);
 Route::post('student/{id}/qualification', ['uses' => 'StudentController@addQualification']);
 Route::put('test/', ['uses' => 'StudentController@update']);
  Route::delete('test/{id}', ['uses' => 'StudentController@destroy']);
  Route::post('register', 'Api\AuthController@register');
