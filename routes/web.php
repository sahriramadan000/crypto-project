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

// Home
Route::get('/', function () {
    return view('home');
})->name('home');

// Smart-Contract
Route::get('/smart-contract', function () {
    return view('smart-contract');
})->name('smart-contract');

// Partner-ships
Route::get('/partner-ships', function () {
    return view('partner-ships');
})->name('partner-ships');
