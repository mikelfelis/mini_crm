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

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');

Route::get('{any}', function () {
    return view('admin/home');
})->where('any', '.*');
=======
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// using middleware for admin routes
Route::middleware('is_admin')->group(function () {
    Route::get('admin/home', 'HomeController@adminHome')->name('admin.home');
    Route::resource('admin/companies', 'CompaniesController');
    Route::resource('admin/employees', 'EmployeeController');
});
>>>>>>> 15a10f0a9162546ce1e0e7d1195aadcffb9eafa3
