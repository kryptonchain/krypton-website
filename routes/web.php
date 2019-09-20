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

Route::get('/', 'Krypton@index')->name('krypton.index');
Route::get('/wallet', 'Krypton@wallet')->name('krypton.wallet');
Route::get('/mining', 'Krypton@mining')->name('krypton.mining');
Route::get('/buy-krypton', 'Krypton@exchanges')->name('krypton.exchanges');
Route::get('/community', 'Krypton@community')->name('krypton.community');
