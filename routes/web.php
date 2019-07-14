<?php



// Route::view('/', 'layouts.front');
Route::get('/','Homecontroller@index');
Route::get('page/{id}','Homecontroller@page');

// // Route::get('/', function () {
//     return view('layouts/master_page');
// }); 

Route::get('/myadmin','AdminController@index');

Auth::routes();

// Route::get('/myadmin', 'HomeController@index')->name('home');


Route::get('/myadmin', 'RoleController@index');

Route::get('myadmin/role/create', 'RoleController@create');
Route::get('myadmin/role/delete/{id}', 'RoleController@delete');
Route::get('myadmin/role/edit/{id}', 'RoleController@edit');
Route::post('myadmin/role/save', 'RoleController@save');
Route::post('myadmin/role/update', 'RoleController@update');


//User Logout
Route::get('myadmin/user','UserController@index');
Route::get('myadmin/user/logout', 'UserController@logout');
Route::post('myadmin/user/save','UserController@save');
Route::get('myadmin/user/edit/{id}', 'UserController@edit');
Route::get('myadmin/user/delete/{id}', 'UserController@delete');
Route::post('myadmin/user/update', 'UserController@update');
Route::get('myadmin/user/create', 'UserController@create');

//page route

Route::get('myadmin/page','PageController@index');
Route::get('myadmin/page/create','PageController@create');
Route::post('myadmin/page/save','PageController@save');

//Slide Route
Route::get('myadmin/slide','SlideController@index');
Route::get('myadmin/slide/create','SlideController@create');
Route::post('myadmin/slide/save','SlideController@save');