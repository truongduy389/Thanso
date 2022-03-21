<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/trangchu', [App\Http\Controllers\HomeController::class, 'getindex'])->name('getindex');


//So chu dao
Route::get('/tra-cuu', [App\Http\Controllers\HomeController::class, 'search'])->name('search');


//Admin
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'getadmin'])->name('getadmin');
Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('logout');
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'show_dashboard'])->name('show_dashboard');
Route::post('/admin-dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');


Route::get('/manager-edit/{sochudao_id}', [App\Http\Controllers\AdminController::class, 'edit_sochudao'])->name('edit_sochudao');
Route::get('/delete/{so_id}', [App\Http\Controllers\AdminController::class, 'delete'])->name('delete');
Route::get('/add-thanso', [App\Http\Controllers\AdminController::class, 'add_thanso'])->name('add_thanso');
Route::post('/save-thanso', [App\Http\Controllers\AdminController::class, 'save_thanso'])->name('save_thanso');
Route::post('/edit-so/{idSo}', [App\Http\Controllers\AdminController::class, 'edit_so'])->name('edit_so');

Route::get('/add-py', [App\Http\Controllers\AdminController::class, 'add_py'])->name('add_py');
Route::post('/save-py', [App\Http\Controllers\AdminController::class, 'save_py'])->name('save_py');
Route::get('/edit-py/{py_id}', [App\Http\Controllers\AdminController::class, 'edit_py'])->name('edit_py');
Route::post('/edit-peakyear/{id_py}', [App\Http\Controllers\AdminController::class, 'edit_peakyear'])->name('edit_peakyear');
Route::get('/delete-py/{peak_id}', [App\Http\Controllers\AdminController::class, 'delete_py'])->name('delete_py');

//Peak Year
Route::get('/peak-year', [App\Http\Controllers\HomeController::class, 'peak_year'])->name('peak_year');
Route::get('/result-py', [App\Http\Controllers\HomeController::class, 'result_py'])->name('result_py');
Route::post('/insert', [App\Http\Controllers\HomeController::class, 'insert'])->name('insert');
