<?php

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/manajemen/create', [App\Http\Controllers\ManagementController::class, 'create'])->name('create');
Route::post('/manajemen/store', [App\Http\Controllers\ManagementController::class, 'store'])->name('store');
Route::get('/manajemen/edit/{id}', [App\Http\Controllers\ManagementController::class, 'edit'])->name('edit');
Route::post('/manajemen/update/{id}', [App\Http\Controllers\ManagementController::class, 'update'])->name('update');
Route::post('/manajemen/destroy/{id}', [App\Http\Controllers\ManagementController::class, 'destroy'])->name('destroy');
Route::get('/manajemen/{id}', [App\Http\Controllers\ManagementController::class, 'index'])->name('index');
Route::get('/rental/fetch', [App\Http\Controllers\RentalController::class, 'fetch'])->name('fetch');
Route::get('/rental/{id}', [App\Http\Controllers\RentalController::class, 'index'])->name('index');
