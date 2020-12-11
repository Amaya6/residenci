<?php

use App\Http\Controllers\CatalogosController;
use App\Http\Controllers\CarrerasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreasController;
use App\Http\Controllers\ApiAppsController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\RolesController;


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
})->middleware('auth');

Auth::routes(['register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth')->group(function()
{

    Route::prefix('app')->group(function(){
        Route::prefix('roles')->group(function () {
            Route::get('', [RolesController::class, 'index'])->name('roles');
            Route::get('add', [RolesController::class, 'add'])->name('roles.add');
            Route::get('edit/{model}', [RolesController::class, 'edit'])->name('roles.edit');
            Route::post('', [RolesController::class, 'store'])->name('roles.store');
            Route::patch('{model}', [RolesController::class, 'update'])->name('roles.update');
            Route::delete('{model}', [RolesController::class, 'destroy'])->name('roles.delete');
        });
        });
    
    Route::prefix('catalogos')->group(function(){
        Route::prefix('areas')->group(function () {
            Route::get('', [AreasController::class, 'index'])->name('area');
            Route::get('add', [AreasController::class, 'add'])->name('area.add');
            Route::get('edit/{model}', [AreasController::class, 'edit'])->name('area.edit');
            Route::post('', [AreasController::class, 'store'])->name('area.store');
            Route::patch('{model}', [AreasController::class, 'update'])->name('area.update');
            Route::delete('{model}', [AreasController::class, 'destroy'])->name('area.delete');
        });

        Route::prefix('carreras')->group(function () {
            Route::get('', [CarrerasController::class, 'index'])->name('carreras');
            Route::get('add', [CarrerasController::class, 'add'])->name('carreras.add');
            Route::post('', [CarrerasController::class, 'store'])->name('carreras.store');
            Route::delete('{model}', [CarrerasController::class, 'destroy'])->name('carreras.delete');
            Route::get('edit/{model}', [CarrerasController::class, 'show'])->name('carreras.edit');
            Route::patch('{model}', [CarrerasController::class, 'update'])->name('carreras.update');
        });
        
        Route::prefix('estudiantes')->group(function () {
            Route::get('', [EstudiantesController::class, 'index'])->name('estudiantes');
            Route::get('add', [EstudiantesController::class, 'add'])->name('estudiantes.add');
            Route::post('', [EstudiantesController::class, 'store'])->name('estudiantes.store');
            Route::delete('{model}', [EstudiantesController::class, 'destroy'])->name('estudiantes.delete');
            Route::get('edit/{model}', [EstudiantesController::class, 'show'])->name('estudiantes.edit');
            Route::patch('{model}', [EstudiantesController::class, 'update'])->name('estudiantes.update');
        });
        
        Route::prefix('catalogos')->group(function () {
            Route::get('carrera', [CatalogosController::class, 'getCarreras']);
        });
    });
});


/*
Rutas para catalogos de la api
*/
Route::middleware('auth')->group(function(){
    Route::prefix('api-app')->group(function(){
        Route::get('areas', [ApiAppsController::class, 'areas']);
        Route::get('estudiantes', [ApiAppsController::class, 'estudiantes']);
        Route::get('sexos', [ApiAppsController::class, 'sexos']);
     
    });
});