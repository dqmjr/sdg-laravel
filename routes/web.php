<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\SdgGoalController;
use App\Http\Controllers\Admin\SdgIndicatorController;

Route::get('lang/{locale}', function($locale) {
    // Проверяем допустимые языки
    if (in_array($locale, ['en', 'ru', 'kk'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
});

Auth::routes(['register' => false]);

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');



Route::post('/set-locale', [PageController::class, 'setLocale'])->name('set.locale');

Route::group(['prefix' => '{locale}', 'where' => ['locale' => 'ru|kk|en']], function () {
    Route::get('/publications', [PageController::class, 'publications'])->name('publications');
    Route::get('/millennium-development-goals', [PageController::class, 'millennium_development_goals'])->name('millennium-development-goals');
    Route::get('/events-activities', [PageController::class, 'events_activities'])->name('events-activities');
    Route::get('/useful-resources', [PageController::class, 'useful_resources'])->name('useful-resources');
    Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');
});

Route::post('/locale', [App\Http\Controllers\HomeController::class, 'setLocale'])->name('user.locale');

Route::middleware(['auth', 'is_admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::put('/users/{user}/reset-password', [UserController::class, 'resetPassword'])->name('users.reset-password');

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
