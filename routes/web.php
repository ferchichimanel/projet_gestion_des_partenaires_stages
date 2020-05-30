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
});
Route::get('/nouveaute', function () {
    return view('nouveaute');
});
Route::get('/institut', function () {
    return view('institut');
});
Route::get('/departement', function () {
    return view('departement');
});
Route::get('/formation', function () {
    return view('formation');
});
Route::get('/vietude', function () {
    return view('vietude');
});
Route::get('/contact', function () {
    return view('contact');
});


Auth::routes();

Route::middleware('auth')->group(function () {
Route::get('/home', 'AppController@home')->name('home');
Route::resource('/etudiant', 'EtudiantController');
Route::resource('/societe', 'SocieteController');
Route::resource('/stage', 'StageController');
});
