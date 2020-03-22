<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','PagesController@index')->name('index');
Route::get('/about','PagesController@about')->name('about');
Route::get('/gallery','PagesController@gallery')->name('gallery');
Route::get('/campaigns','PagesController@campaign')->name('campaign');
Route::get('/volunteer','PagesController@volunteer')->name('volunteer');
Route::get('/contact','PagesController@showContactPage')->name('contact');
Route::post('/contact','PagesController@contact')->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
