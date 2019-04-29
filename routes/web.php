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

Route::get('/', 'HomesController@index');

Route::get('/actress_list/{keyword}', 'ActressController@list');

Route::get('/actress/{name}', 'ActressController@index');

// Route::get('/item/1', function () {
//     return view('pages.item.index');
// });

// Route::get('/sql', 'SqlController@index');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('sitemap.xml', 'SitemapController@xml')->name('sitemap.xml');