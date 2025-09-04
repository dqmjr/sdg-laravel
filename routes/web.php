<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
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



Auth::routes(['register' => false]);

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin/users', [UserController::class, 'index']); // или любой другой admin-доступ
});


Route::middleware(['auth', 'is_admin'])->prefix('admin')->group(function () {
    Route::get('/users/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('/users', [UserController::class, 'store'])->name('admin.users.store');
    Route::prefix('admin')->name('admin.')->middleware(['auth', 'is_admin'])->group(function () {
        Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    });
    Route::put('/users/{user}/reset-password', [UserController::class, 'resetPassword'])
        ->name('admin.users.reset-password');
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
