<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelurahanController;

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
    return view('admin.index');
})->name('index');

Route::get('/create/kelurahan', ([KelurahanController::class, 'create']))->name('tambah.kelurahan');
Route::get('/kelurahan', ([KelurahanController::class, 'index']))->name('index.kelurahan');
Route::get('/edit/kelurahan/{id}', ([KelurahanController::class, 'edit']))->name('edit.kelurahan');
Route::post('/add/kelurahan', ([KelurahanController::class, 'store']))->name('store.kelurahan');
Route::post('/update/kelurahan/{id}', ([KelurahanController::class, 'update']))->name('update.kelurahan');
Route::get('/delete/kelurahan/{id}', ([KelurahanController::class, 'destroy']))->name('delete.kelurahan');

