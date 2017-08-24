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

Route::any('/', [
    'middleware' => 'auth',
    //'uses' => 'HomeController@addnewads'
    'uses' => 'HomeController@index'
])->name('index');

Route::any('/clients', [
    'middleware' => 'auth',
    'uses' => 'HomeController@index'
])->name('index');

Route::get('/admin', 'HomeController@admin');

Route::get('/clients', 'ClientController@index');

Route::any('/newcustomer','HomeController@addnewads');

Route::any('/postads','HomeController@newads');

Route::any('/report','HomeController@report');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::resource('ads', 'AdController');
    Route::resource('banners', 'BannerController');
    Route::resource('items', 'ItemController');
    Route::resource('clients', 'ClientController');
    Route::resource('websites', 'WebsiteController');
});

// Templates
Route::group(array('prefix'=>'/templates/'),function(){
    Route::get('{template}', array( function($template)
    {
        $template = str_replace(".html","",$template);
        View::addExtension('html','php');
        return View::make('templates.'.$template);
    }));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

