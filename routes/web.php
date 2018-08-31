<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*
$router->group(['prefix' => 'api'], function () use ($router) {

  $router->get('courses',  ['uses' => 'StudentController@index']);
  $router->get('student/{id}', ['uses' => 'StudentController@show']);
  //$router->post('student/{id}/qualification', ['uses' => 'StudentController@addQualification']);
  $router->post('student/qualification', ['uses' => 'StudentController@addQualification']);
 })	;*/