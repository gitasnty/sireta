<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\ManualMutuController;
use App\Http\Controllers\backend\ProsedurMutuController;
use App\Http\Controllers\backend\CatatanMutuController;
use App\Http\Controllers\backend\PetunjukKerjaController;
use App\Http\Controllers\backend\LainLainController;
use App\Http\Controllers\backend\UnitKerjaController;
use App\Http\Controllers\backend\ProfileController;


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
    Route::get('/view', [ManualMutuController::class, 'manualmutuView'])->name('manualmutu.view');
    Route::get('/add', [ManualMutuController::class, 'manualmutuAdd'])->name('manualmutu.add');
    Route::post('/store', [ManualMutuController::class, 'manualmutuStore'])->name('manualmutu.store');
});

//Prosedur Mutu
Route::prefix('prosedurmutu')->group(function(){
    Route::get('/view', [ProsedurMutuController::class, 'prosedurmutuView'])->name('prosedurmutu.view');
    Route::get('/add', [ProsedurMutuController::class, 'prosedurmutuAdd'])->name('prosedurmutu.add');
    Route::post('/store', [ProsedurMutuController::class, 'prosedurmutuStore'])->name('prosedurmutu.store');
});

//Petunjuk Kerja
Route::prefix('petunjukkerja')->group(function(){
    Route::get('/view', [PetunjukKerjaController::class, 'petunjukkerjaView'])->name('petunjukkerja.view');
    Route::get('/add', [PetunjukKerjaController::class, 'petunjukkerjaAdd'])->name('petunjukkerja.add');
    Route::post('/store', [PetunjukKerjaController::class, 'petunjukkerjaStore'])->name('petunjukkerja.store');
});

//Catatan Mutu
Route::prefix('catatanmutu')->group(function(){
    Route::get('/view', [CatatanMutuController::class, 'catatanmutuView'])->name('catatanmutu.view');
    Route::get('/add', [CatatanMutuController::class, 'catatanmutuAdd'])->name('catatanmutu.add');
    Route::post('/store', [CatatanMutuController::class, 'catatanmutuStore'])->name('catatanmutu.store');
});

//Lain Lain
Route::prefix('lainlain')->group(function(){
    Route::get('/strukturorganisasi', [lainlainController::class, 'lainlainstrukturOrganisasi'])->name('lainlain.strukturorganisasi');
    Route::get('/sasaranmutu', [lainlainController::class, 'lainlainSasaranmutu'])->name('lainlain.sasaranmutu');
    Route::get('/proker', [lainlainController::class, 'lainlainProker'])->name('lainlain.proker');
});

//Unit Kerja
Route::prefix('unitkerja')->group(function(){
    Route::get('/view', [UnitKerjaController::class, 'unitkerjaView'])->name('unitkerja.view');
    Route::get('/add', [UnitKerjaController::class, 'unitkerjaAdd'])->name('unitkerja.add');
    Route::post('/store', [UnitKerjaController::class, 'unitkerjaStore'])->name('unitkerja.store');
    Route::get('/edit/{id}', [UnitKerjaController::class, 'unitkerjaEdit'])->name('unitkerja.edit');
    Route::post('/update/{id}', [UnitKerjaController::class, 'unitkerjaUpdate'])->name('unitkerja.update');
    Route::get('/delete/{id}', [UnitKerjaController::class, 'unitkerjaDelete'])->name('unitkerja.delete');
});

//User Profile and Change Password
Route::prefix('profile')->group(function(){
    Route::get('/view', [ProfileController::class, 'profileView'])->name('profile.view');

});
