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
    return view('home');
})->name('home');

Route::get('/buy-ticket', function () {
    return view('home');
})->name('buy-ticket');

Route::get('/speakers', function () {
    return view('speakers');
})->name('speakers');

Route::get('/speakers/a', function () {
    return view('speaker-a');
});
Route::get('/speakers/b', function () {
    return view('speaker-a');
});


Route::resource('event-reg', App\Http\Controllers\eventRegController::class)->only('index', 'store', 'show');
