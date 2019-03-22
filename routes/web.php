<?php
Route::get('login/index', 'loginController@index');
Route::get('login/sign-in', 'loginController@signIn');
Route::post('login/index', 'loginController@login');



Route::get('form/index', 'FormController@index');

Route::get('form/new','FormController@new');
Route::post('form/new','FormController@create');
Route::post('form/complete', 'FormController@complete');

Route::get('form/user_edit', 'FormController@edit');
Route::post('form/user_edit', 'FormController@update');

Route::post('form/delete', 'FormController@delete');


Route::get('/', function () {
    return view('welcome');
});



// Route::resource('home', 'HomeController');

// Route::get('/home', function(){
//     return view('home', ['message' =>'今夜']);
// });


// Route::controller('home', 'HomeController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
