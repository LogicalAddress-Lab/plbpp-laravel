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
})->name('home');

Route::get('about', 'PagesController@about')->name('about');
Route::get('/mandate', 'PagesController@mandate')->name('mandate');
Route::get('/e-procurement', 'PagesController@eProcurement')->name('procurement');
Route::get('news', 'PagesController@news')->name('news');