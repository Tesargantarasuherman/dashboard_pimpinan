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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/map', 'HomeController@map')->name('map');
// Route::post('/', 'HomeController@login')->name('login');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('agenda', 'ScheduleController@index')->name('agenda');
Route::post('fullcalenderAjax', 'ScheduleController@ajax')->name('fullcalenderAjax');
Route::post('agenda/tambah', 'ScheduleController@AddAgenda')->name('agenda.tambah');
Route::get('/about', function () {
    return view('about');
})->name('about');
