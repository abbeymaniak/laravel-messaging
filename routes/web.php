<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessagesController;

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
})->middleware('guest');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'messages'], function () {
    Route::get('/', [MessagesController::class, 'index'])->name('messages');
    Route::get('/create', [MessagesController::class, 'create'])->name('messages.create');
    Route::post('/', [MessagesController::class, 'store'])->name('messages.store');
    Route::get('{id}', [MessagesController::class, 'show'])->name('messages.show');
    Route::put('{id}', [MessagesController::class, 'update'])->name('messages.update');
});
