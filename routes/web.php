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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/account', function () {
    return view('account');
});


// Route::get('/backend', function () {
//     return view('backend');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'backend', 'middleware' => ['auth']], function () {
    Route::resource('/pegawai','pegawaiController');

});


// Route::resource('/admin/pegawai', 'pegawaiController');
