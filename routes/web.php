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
    return view('pages.frontpage');
});

Route::get('/destinations', function () {
    return view('pages.destinations');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/login', function () {
    return view('welcome');
});

Route::get('/FAQ', function () {
    return view('pages.faq');
});

/*creating and testing the members only page */
Route::get('/member', function () {
    return view('pages.member-only');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
