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
Route::get('/visitor/create','VisitorController@create')->name('visitor.create');
Route::post('/visitor/create','VisitorController@store');


/*
**
    User routes
**
*/
Route::get('user/page','StaffController@index')->name('user.page')->middleware(['auth']);

Route::get('user.details{user}','StaffController@getMyDetails')->name('user.details');
//future visits
Route::get('user/futureVisits/{user}','StaffController@myFutureVisits')->name('user.futureVisits');
//past visits
Route::get('user/pastVisits/{user}','StaffController@myPastVisits')->name('user.pastVisits');
//pending visits
Route::get('user/pendingVisits/{user}','StaffController@myPendingVisits')->name('user.pendingVisits');
//confirmed visits
Route::get('user/confirmedVisits/{user}','StaffController@myConfirmedVisits')->name('user.confirmedVisits');
//My visits
Route::get('user/myVisits/{user}', 'StaffController@myVisits')->name('user.visits');
//My visitors
Route::get('user/myVisitors/{user}', 'StaffController@myVisitors')->name('user.visitors');
//Show Add new visiotr form
Route::get('user/addVisitor','StaffController@getAddVisitor')->name('user.addVisitor');
//post new visitor
Route::post('user/addVisitor','StaffController@postAddVisitor');

//Show Add new visit form
Route::get('user/addVisit/{visitor}','StaffController@getAddVisit')->name('user.addVisit');


/*
**
    DashBoard routes
**
*/
Route::get('dashboard','DashBoardController@index')->name('dashboard')->middleware(['auth']);
