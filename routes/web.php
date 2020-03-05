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

Route::get('/email', function(){
	return new App\Mail\NewUserWelcomeMail;
});


Route::post('/follow/{user}', 'FollowsController@store');

Route::resource('/post', 'PostsController');

Route::get('/profile/{user}', 'ProfileController@index')->name('profile.show');
Route::get('/profile/edit/{user}', 'ProfileController@edit')->name('profile.edit');
Route::patch('/profile/update', 'ProfileController@update')->name('profile.update');
