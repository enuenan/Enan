<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Portfolio\PortfolioController;

Route::get('/', [PortfolioController::class, 'index'])->name('/');

Route::get('/dashboard', function () {
    // Auth::logout();
    // return redirect()->route('login');

    return redirect()->route('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['prefix' => 'enan-portfolio'], function () {
    Route::get('edventure', [PortfolioController::class, 'edventure'])->name('edventure');
    Route::get('doctors-blog', [PortfolioController::class, 'doctorsBlog'])->name('doctorsBlog');
    Route::get('el-mo1-cars', [PortfolioController::class, 'elmo'])->name('elmo');
    Route::get('daruchini', [PortfolioController::class, 'daruchini'])->name('daruchini');
    Route::get('cowpik', [PortfolioController::class, 'cowpik'])->name('cowpik');
});

require __DIR__   . '/auth.php';
