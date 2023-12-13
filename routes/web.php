<?php

use App\Http\Controllers\FastfoodController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/read-fastfood', [FastfoodController::class, 'readfastfood']);
Route::get('/create-fastfood', [FastfoodController::class, 'viewcreateFastfood']);
Route::post('/read-fastfood',[FastfoodController::class, 'createFastfood1'])->name('fastfood.store');
