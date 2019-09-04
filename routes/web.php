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
    return view('academics.index');
})->name('home');

Route::get('/quienes-somos', function () {
    return view('academics.labout');
})->name('about');

Route::get('/admision', function () {
    return view('academics.admissions');
})->name('admision');

Route::get('/contacto', function () {
    return view('academics.contact');
})->name('contact');

Route::get('/cursos', function () {
    return view('academics.courses');
})->name('curso');

Route::get('/login', function () {
    return view('academics.login');
})->name('login');

Route::get('/registro', function () {
    return view('academics.register');
    })->name('register');

