<?php

use Illuminate\Support\Facades\Route;

/**
 * SITE
 */
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/quem-somos', 'HomeController@about');
Route::get('/blog', 'HomeController@blog');
Route::get('/contato', 'HomeController@contact');
Route::get('/dashboard', 'HomeController@dashboard');
