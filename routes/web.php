<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\ManualMutuController;
use App\Http\Controllers\backend\ProsedurMutuController;
use App\Http\Controllers\backend\CatatanMutuController;
use App\Http\Controllers\backend\PetunjukKerjaController;
use App\Http\Controllers\backend\LainLainController;
use App\Http\Controllers\backend\UnitKerjaController;

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
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

Route::get('/admin/logout', [AdminController::class, 'Logout'])->name('admin.logout');


//Manual Mutu
Route::prefix('manualmutu')->group(function(){
    Route::get('/view', [ManualMutuController::class, 'manualmutuview'])->name('manualmutu.view');
    Route::get('/add', [ManualMutuController::class, 'manualmutuadd'])->name('manualmutu.add');
});

//Prosedur Mutu
Route::prefix('prosedurmutu')->group(function(){
    Route::get('/view', [ProsedurMutuController::class, 'prosedurmutuview'])->name('prosedurmutu.view');
    Route::get('/add', [ProsedurMutuController::class, 'prosedurmutuadd'])->name('prosedurmutu.add');
});

//Petunjuk Kerja
Route::prefix('petunjukkerja')->group(function(){
    Route::get('/view', [PetunjukKerjaController::class, 'petunjukkerjaview'])->name('petunjukkerja.view');
    Route::get('/add', [PetunjukKerjaController::class, 'petunjukkerjaadd'])->name('petunjukkerja.add');
});

//Catatan Mutu
Route::prefix('catatanmutu')->group(function(){
    Route::get('/view', [CatatanMutuController::class, 'catatanmutuview'])->name('catatanmutu.view');
    Route::get('/add', [CatatanMutuController::class, 'catatanmutuadd'])->name('catatanmutu.add');
});

//Lain Lain
Route::prefix('lainlain')->group(function(){
    Route::get('/strukturorganisasi', [lainlainController::class, 'lainlainstrukturorganisasi'])->name('lainlain.strukturorganisasi');
    Route::get('/sasaranmutu', [lainlainController::class, 'lainlainsasaranmutu'])->name('lainlain.sasaranmutu');
    Route::get('/proker', [lainlainController::class, 'lainlainproker'])->name('lainlain.proker');
});

//Unit Kerja
Route::prefix('unitkerja')->group(function(){
    Route::get('/view', [UnitKerjaController::class, 'unitkerjaview'])->name('unitkerja.view');
    Route::get('/add', [UnitKerjaController::class, 'unitkerjaadd'])->name('unitkerja.add');
    Route::get('/store', [UnitKerjaController::class, 'unitkerjastore'])->name('unitkerja.store');
});