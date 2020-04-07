<?php

use Illuminate\Support\Facades\Route;

/**
 * SITE
 */
Route::group(['middleware' => 'stats'], function () {
    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
    Route::get('/quem-somos', 'HomeController@about');
    Route::get('/blog', 'HomeController@blog');
    Route::get('/contato', 'HomeController@contact');
});

Route::get('/dashboard', 'HomeController@dashboard');
Route::get('/stats-today', 'StatisticsController@visitsToday');
Route::get('/stats-month', 'StatisticsController@visitsInMonth');
Route::get('/stats-year', 'StatisticsController@visitsInYear');
Route::get('/stats/{column}/{date?}/{limit?}', 'StatisticsController@columnStats');

