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
    return view('site.home');
})-> name('site.home');

Route::get('/contato', function () {
    return view('site.contato');
})-> name('site.contato');

Route::get('/login', function () {
    return view('site.login');
})-> name('site.login');

Route::get('/cadastro', function () {
    return view('site.cadastro');
})-> name('site.cadastro');

Route::get('/politicaprivacidade', function () {
    return view('site.politicaprivacidade');
})-> name('site.politicaprivacidade');

Route::get('/termodeuso', function () {
    return view('site.termodeuso');
})-> name('site.termodeuso');
