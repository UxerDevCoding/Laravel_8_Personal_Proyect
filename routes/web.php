<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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
Route::get('/', [HomeController::class, 'index']);
Route::get('courses', [CursoController::class, 'index'])->name('courses.index');
Route::get('courses/create', [CursoController::class, 'create'])->name('courses.create');;
Route::post('courses/create', [CursoController::class, 'store'])->name('courses.store');;
Route::get('courses/{id}', [CursoController::class, 'show'])->name('courses.show');;
Route::get('courses/{id}/edit', [CursoController::class, 'edit'])->name('courses.edit');;
Route::put('courses/{id}', [CursoController::class, 'update'])->name('courses.update');;
