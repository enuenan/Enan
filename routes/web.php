<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Portfolio\PortfolioController;

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

Route::get('/', [PortfolioController::class, 'index']);
Route::get('enan-portfolio/edventure', [PortfolioController::class, 'edventure'])->name('edventure');
Route::get('enan-portfolio/doctors-blog', [PortfolioController::class, 'doctorsBlog'])->name('doctorsBlog');
Route::get('enan-portfolio/el-mo1-cars', [PortfolioController::class, 'elmo'])->name('elmo');
Route::get('enan-portfolio/daruchini', [PortfolioController::class, 'daruchini'])->name('daruchini');
Route::get('enan-portfolio/cowpik', [PortfolioController::class, 'cowpik'])->name('cowpik');
