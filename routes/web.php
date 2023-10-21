<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\EmpresaController;
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

Route::get('/', HomeController::class )->name('home.__invoke');
Route::get('curso', [CursoController::class,'index']) ->name('cursos.index');
Route::get('curso/la',[CursoController::class,'la'])->name('cursos.la');
Route::get('curso/login',[EmpresaController::class,'log'])->name('cursos.login');
Route::get('curso/registro',[EmpresaController::class,'reg'])->name('register');
Route::post('cursos',[EmpresaController::class,'keep'])->name('curso.keep');
Route::post('login',[EmpresaController::class,'login'])->name('curso.login');
Route::post('estudio',[EmpresaController::class,'adquisicion'])->name('estudio');











