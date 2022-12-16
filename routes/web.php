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



//Prosedur Mutu
Route::group([
    'prefix' => 'prosedurmutu',
    'as' => 'prosedurmutu.'
],function(){
    Route::get('/view', [ProsedurMutuController::class, 'view'])->name('view');
    Route::get('/add', [ProsedurMutuController::class, 'add'])->name('add');
    Route::post('/upload', [ProsedurMutuController::class, 'upload'])->name('upload');
    Route::get('/download/{document}', [ProsedurMutuController::class, 'download'])->name('download');
    Route::get('/delete/{id}', [ProsedurMutuController::class, 'delete'])->name('delete');
    Route::post('/store', [ProsedurMutuController::class, 'store'])->name('store');
});

//Petunjuk Kerja
Route::group([
    'prefix' => 'petunjukkerja',
    'as' => 'petunjukkerja.'
],function(){
    Route::get('/view', [PetunjukKerjaController::class, 'view'])->name('view');
    Route::get('/add', [PetunjukKerjaController::class, 'add'])->name('add');
    Route::post('/upload', [PetunjukKerjaController::class, 'upload'])->name('upload');
    Route::get('/download/{document}', [PetunjukKerjaController::class, 'download'])->name('download');
    Route::get('/delete/{id}', [PetunjukKerjaController::class, 'delete'])->name('delete');
    Route::post('/store', [PetunjukKerjaController::class, 'store'])->name('store');
});

//Manual Mutu
Route::group([
    'prefix' => 'manualmutu',
    'as' => 'manualmutu.'
],function(){
    Route::get('/view', [ManualMutuController::class, 'view'])->name('view');
    Route::get('/add', [ManualMutuController::class, 'add'])->name('add');
    Route::post('/upload', [ManualMutuController::class, 'upload'])->name('upload');
    Route::get('/download/{document}', [ManualMutuController::class, 'download'])->name('download');
    Route::get('/delete/{id}', [ManualMutuController::class, 'delete'])->name('delete');
    Route::post('/store', [ManualMutuController::class, 'store'])->name('store');
});

//Catatan Mutu
Route::group([
    'prefix' => 'catatanmutu',
    'as' => 'catatanmutu.'
],function(){
    Route::get('/view', [CatatanMutuController::class, 'view'])->name('view');
    Route::get('/add', [CatatanMutuController::class, 'add'])->name('add');
    Route::post('/upload', [CatatanMutuController::class, 'upload'])->name('upload');
    Route::get('/download/{document}', [CatatanMutuController::class, 'download'])->name('download');
    Route::get('/delete/{id}', [CatatanMutuController::class, 'delete'])->name('delete');
    Route::post('/store', [CatatanMutuController::class, 'store'])->name('store');
});

//Lain Lain
Route::group([
    'prefix' => 'lainlain',
    'as' => 'lainlain.'
], function(){
    Route::get('/organisasi', [lainlainController::class, 'viewOrganisasi'])->name('viewOrganisasi');
    Route::get('/sasaranmutu', [lainlainController::class, 'viewSasaranmutu'])->name('viewSasaranmutu');
    Route::get('/proker', [lainlainController::class, 'viewProker'])->name('viewProker');
    Route::get('/view', [lainlainController::class, 'view'])->name('view');
    Route::get('/add', [lainlainController::class, 'add'])->name('add');
    Route::post('/upload', [lainlainController::class, 'upload'])->name('upload');
    Route::get('/download/{document}', [lainlainController::class, 'download'])->name('download');
    Route::get('/delete/{id}', [lainlainController::class, 'delete'])->name('delete');
    Route::post('/store', [lainlainController::class, 'store'])->name('store');
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
