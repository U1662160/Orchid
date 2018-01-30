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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashBoardController@index')->name('dashboard');
/*
**
    visit routes
**
*/
Route::get('visits/all','VisitController@index')->name('visits.all');
Route::get('visits/show/{visit}','VisitController@show')->name('visit.show');
Route::get('visits/create','VisitController@create')->name('visit.create');
Route::post('visits/create','VisitController@store');
Route::get('visits/update/{visit}','VisitController@edit')->name('visit.edit');
Route::post('visits/update/{visit}','VisitController@update');
Route::post('visits/update/{visit}','VisitController@update');
Route::get('visits/delete/{visit}','VisitController@destroy')->name('visit.destroy');
/*
**
    visitor routes
**
*/
Route::get('/visitors/all','VisitorController@index')->name('visitor.all');