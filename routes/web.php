<?php

use App\Http\Controllers\cursoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;

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

Route::get('/', indexController::class)->name('index.home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user',  [HomeController::class, 'getUser'] );

Route::get('/adm-cursos', [cursoController::class, 'index'])->name('admin.cursos.view');

Route::get('/adm-cursos/crear', [cursoController::class, 'view_create'])->name('admin.cursos.create');

Route::post('/adm-cursos/crear', [cursoController::class, 'store'])->name('admin.cursos.store');

Route::get('/adm-cursos/curso/{id}', [cursoController::class, 'show'])->name('admin.curso.detalle');

Route::get('/adm-curso/curso/{id}/edit', [cursoController::class, 'edit'])->name('admin.curso.edit');

Route::put('/adm-curso/curso/{id}/update', [cursoController::class, 'update'])->name('admin.curso.update');

Route::delete('/adm-curso/curso/{id}/delete', [cursoController::class, 'destroy'])->name('admin.curso.delete');
