<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\SdgController;
use App\Http\Controllers\Admin\SdgGoalController;
use App\Http\Controllers\Admin\SdgIndicatorController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Группа маршрутов для админки — требует авторизации и проверки is_admin
Route::middleware(['auth', 'is_admin'])->prefix('admin')->name('admin.')->group(function () {
    // CRUD пользователи
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::put('/users/{user}/reset-password', [UserController::class, 'resetPassword'])->name('users.reset-password');

    // Можно оставить resource, если хочешь весь CRUD через ресурсный контроллер
    Route::resource('users', UserController::class)->except(['index', 'create', 'store']);
});
Route::redirect('/home', '/', 301);

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {

    Route::get('/', function () {
        return redirect()->route('admin.goals.index');
    });

    Route::resource('goals', SdgGoalController::class);
    Route::resource('indicators', SdgIndicatorController::class);
});
