<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    AboutController,
    AdminController,
    SkillController,
    CategoryController,
    SettingsController,
    PortfolioController,
    CVAndResmeController,
};

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'is_enan']], function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::resource('about', AboutController::class);
    Route::resource('skills', SkillController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('portfolio', PortfolioController::class);
    Route::resource('cv-and-resume', CVAndResmeController::class);

    // SETTINGS START
    Route::get('settings', [SettingsController::class, 'settings'])->name('settings');
    Route::post('profile-settings/{id}', [SettingsController::class, 'profileSettings'])->name('profileSettings');
    Route::post('change-password/{id}', [SettingsController::class, 'changePassword'])->name('changePassword');
    // SETTINGS END
});

require __DIR__ . '/auth.php';
