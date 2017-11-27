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

// Route::any('/lugas', function () {
//     return view('lugas');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/users', 'UsersController@index')->name('users');
Route::get('/users/add', function(){
    return view('admin/users/create');
})->name('users/add');
Route::post('/users/add', 'UsersController@store')->name('users.add.post');
Route::post('/users/profile', 'UsersController@profileUpdate');
Route::get('/users/profile', 'UsersController@profile')->name('users/profile');
