<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SettingsController;

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'is_enan']], function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // SETTINGS START
    Route::get('settings', [SettingsController::class, 'settings'])->name('settings');
    Route::post('profile-settings/{id}', [SettingsController::class, 'profileSettings'])->name('profileSettings');
    Route::post('change-password/{id}', [SettingsController::class, 'changePassword'])->name('changePassword');
    // SETTINGS END
});

require __DIR__ . '/auth.php';
