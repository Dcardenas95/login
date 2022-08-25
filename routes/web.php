<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

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




Route::get('/materias', [CourseController::class, 'index'])->name('course.index');
Route::get('/materias/crear', [CourseController::class, 'create'])->name('course.create');
Route::post('/materias/guardar', [CourseController::class, 'store'])->name('course.store');
Route::get('/materias/{course}/editar', [CourseController::class, 'edit'])->name('course.edit');
Route::put('/materias/{course}/actualizar', [CourseController::class, 'update'])->name('course.update');
Route::delete('/materias/{course}/eliminar', [CourseController::class, 'destroy'])->name('course.destroy');

/*
favor revisar la implementacion de estas rutas , me da error quiero ponerle un prefijo y usar el controller
https://laravel.com/docs/9.x/routing  -> me guie de esto


Route::controller(CourseController::class)->prefix('materias')->group(function () {
    Route::get('/','index')->name('course.index');
    Route::get('/crear','crear')->name('course.create');
    Route::post('/guardar','guardar')->name('course.store');
    Route::get('/{course}/editar', 'edit')->name('course.edit');
    Route::put('/{course}/actualizar', 'update')->name('course.update');
    Route::delete('/{course}/eliminar','destroy')->name('course.destroy');
});*/




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
