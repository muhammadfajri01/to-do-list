<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [TodoController::class, 'index'])->name('index');
Route::get('/tambah', [TodoController::class, 'tambah'])->name('tambah');
Route::post('/tambah/proses', [TodoController::class, 'store'])->name('tambah.proses');
Route::get('/edit/{id}', [TodoController::class, 'edit'])->name('edit');
Route::put('/edit/proses/{id}', [TodoController::class, 'update'])->name('edit.proses');
Route::get('/delete/{id}', [TodoController::class, 'delete'])->name('delete');
