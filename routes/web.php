<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Service;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;

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
    return view('auth.register');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('index');
})->name('dashboard');

//Route::get('services', Services::class);
Route::resource('services', Service::class);

Route::resource('blogs', BlogController::class);

Route::resource('contact', ContactController::class);