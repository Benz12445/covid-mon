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

Route::get('/country',function(){
    return redirect('/country/global');
});
Route::get('/country/{country}','WebpageController@index');

Route::get('/api/country/{country?}', 'ApiController@fetchDataFromAPIByDate');
// Route::get('/api/country/{country?}/{date_begin}/{date_end}', 'ApiController@fetchDataFromAPIByDateRange');

