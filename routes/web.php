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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/partners', 'HomeController@partners')->name('partners');
Route::get('/news', 'HomeController@news')->name('news');
Route::get('/reviews', 'HomeController@reviews')->name('reviews');
Route::get('/documents', 'HomeController@documents')->name('docs');
Route::get('/contacts', 'HomeController@contacts')->name('contacts');
Route::get('/loto', 'HomeController@loto')->name('loto');
Route::get('/profit-calculator', 'HomeController@calculation')->name('calculator');
