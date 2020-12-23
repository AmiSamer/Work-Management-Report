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



Route::group(['middleware' => 'prevent-back-history'],function(){



Route::get('/', function () {
    return view('front.front-page');
    // return view('welcome');
});

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@backDash')->name('back-dash');
Route::get('/running', 'HomeController@running')->name('run');
Route::get('/completed', 'HomeController@complete')->name('com');


Route::get('/add-project', 'ProjectController@index')->name('add-project');
Route::post('/save-project', 'ProjectController@saveProject')->name('save-project');
Route::get('/view-project','ProjectController@viewProject')->name('view-project');
Route::post('/update-project', 'ProjectController@updateProject')->name('update-project');
Route::get('/delete-project/{id}', 'ProjectController@deleteProject')->name('delete-project');



Route::get('/user-login', 'EmpController@empLogin')->name('user-login');
Route::get('/user-register', 'EmpController@empResister')->name('user-register');


Route::post('/save-register', 'EmpController@saveRegister')->name('save-register');
Route::post('/user-login', 'EmpController@saveLogin')->name('save-login');
Route::get('/user-logout', 'EmpController@empLogout')->name('user-logout');


Route::get('/change-admin-password', 'ChangeController@index')->name('chadmin-password');
Route::post('/admin', 'ChangeController@store')->name('save-change-adpassword');










Route::get('/change-user-password', 'EmpController@index')->name('chuser-password');
Route::post('/u', 'EmpController@storeNewUserPassword')->name('save-change-userpassword');







Route::get('/add-work', 'WorkController@index')->name('add-work');
Route::post('/save-work', 'WorkController@saveWork')->name('save-work');
Route::get('/view-work','WorkController@viewWork')->name('view-work');
Route::post('/update-work', 'WorkController@updateWork')->name('update-work');
Route::get('/back', 'EmpController@empBackDash')->name('emp-back-dash');
// Route::get('/add-work', 'ProjectController@addProject');

Route::get('/view-report','ReportController@viewReport')->name('view-report');



Route::post('/view-search', 'ReportController@searchResult')->name('search');

Route::get('/all users', 'ReportController@allUsers')->name('all emp');


// Route::resource('view-report', 'ReportController');


// Route::resource('customsearch', 'ReportController');


});

