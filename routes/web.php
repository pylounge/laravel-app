<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers;
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
// routs
Route::get('/', Controllers\IndexController::class)->name('index');


// Route::get('contacts', function () {
//     return view('contacts');
// })->name('contacts')->middleware('auth');

Route::get('contacts', function () {
    return view('contacts');
})->name('contacts');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
