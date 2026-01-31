<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [ContactController::class, 'index'])->name('index');
Route::post('/confirm', [ContactController::class, 'confirm'])->name('confirm');
Route::post('/store', [ContactController::class, 'store'])->name('store');
Route::get('/thanks', [ContactController::class, 'thanks'])->name('thanks');

Route::get('/admin', [ContactController::class, 'admin'])->name('admin');
Route::get('/search', [ContactController::class, 'search'])->name('search');
Route::post('/reset', [ContactController::class, 'reset'])->name('reset');
Route::post('/delete', [ContactController::class, 'delete'])->name('delete');

Route::get('/register', [ContactController::class, 'register'])->name('register');
Route::get('/login', [ContactController::class, 'login'])->name('login');
Route::post('/logout', [ContactController::class, 'logout'])->name('logout');

Route::get('/export', [ContactController::class, 'export'])->name('export');
