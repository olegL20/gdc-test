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
    return view('index')->with('rates', \App\Rate::all());
})->name('home');

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/partners', 'HomeController@partners')->name('partners');
Route::get('/news', 'HomeController@news')->name('news');
Route::get('/reviews', 'HomeController@reviews')->name('reviews');
Route::get('/documents', 'HomeController@documents')->name('docs');
Route::get('/documents-interactive-investor', 'HomeController@documentII')->name('docsII');
Route::get('/documents-cccl', 'HomeController@documentCCCL')->name('docsCCCL');
Route::get('/documents-cpi', 'HomeController@documentCPI')->name('docsCPI');
Route::get('/documents-gbsro', 'HomeController@documentGBSRO')->name('docsGBSRO');
Route::get('/contacts', 'HomeController@contacts')->name('contacts');
Route::get('/loto', 'HomeController@loto')->name('loto');
Route::get('/profit-calculator', 'HomeController@calculation')->name('calculator');


Route::get('/cabinet', 'CabinetController@index')->middleware(['auth'])->name('cabinet');
Route::get('/cabinet/withdraw', 'CabinetController@withdraw')->middleware(['auth'])->name('withdraw');
Route::get('/admin', 'AdminController@index')->middleware(['auth', 'admin'])->name('admin');
Route::get('/admin/users', 'AdminController@users')->middleware(['auth', 'admin'])->name('admin.users');
Route::get('/admin/transactions', 'AdminController@transactions')->middleware(['auth', 'admin'])->name('admin.transactions');
Route::get('/admin/lottery', 'LotteryController@admin')->middleware(['auth', 'admin'])->name('admin.lottery');
Route::get('/admin/lottery/create-winner', 'LotteryController@createWinner')->middleware(['auth', 'admin'])->name('admin.winner-create');
Route::get('/admin/lottery/{winner}/delete', 'LotteryController@deleteWinner')->middleware(['auth', 'admin'])->name('admin.winner-delete');
Route::get('/admin/rates', 'RateController@rates')->middleware(['auth', 'admin'])->name('admin.rates');
Route::get('/admin/rates/create', 'RateController@createRate')->middleware(['auth', 'admin'])->name('rate_create');
Route::get('/rates/{rate}/invest', 'RateController@investRate')->middleware(['auth'])->name('invest');
Route::get('/rates/{rate}/start-invest', 'RateController@invest')->middleware(['auth'])->name('start_invest');
Route::get('/admin/users/{user}/verify', 'AdminController@sendVerifyLink')->name('admin.verification_sent');
Route::get('/admin/users/{user}/set-cashback', 'AdminController@cashback')->middleware(['auth', 'admin'])->name('admin.cashback');

Route::get('/referral/{code}', 'CabinetController@referralJoin')->name('referral');
Route::get('/cabinet/{user}/balance', 'CabinetController@balance')->name('balance');
Route::any('/skrill-callback', 'CabinetController@callbackSkrill')->name('skrill-callback');
Route::get('/payment-succeed', function () {
    return view('pages.success');
})->name('successful-payment');

Route::get('/status', 'PayeerController@status')->name('payeer-status');
Route::get('/success', 'PayeerController@success')->name('payeer-success');
Route::get('/fail', 'PayeerController@fail')->name('payeer-fail');
