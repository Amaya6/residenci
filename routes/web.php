<?php

use App\Http\Controllers\CatalogosController;
use App\Http\Controllers\CarrerasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreasController;
use App\Http\Controllers\ApiAppsController;


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

Auth::routes(['register'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function(){
    Route::prefix('catalogos')->group(function(){
        Route::prefix('areas')->group(function () {
            Route::get('', [AreasController::class, 'index'])->name('area');
            Route::get('add', [AreasController::class, 'add'])->name('area.add');
            Route::get('edit/{model}', [AreasController::class, 'edit'])->name('area.edit');
            Route::post('', [AreasController::class, 'store'])->name('area.store');
            Route::patch('{model}', [AreasController::class, 'update'])->name('area.update');
            Route::delete('{model}', [AreasController::class, 'destroy'])->name('area.delete');
        });

        Route::prefix('carrera')->group(function () {
            Route::get('', [CarrerasController::class, 'index'])->name('carrera');
            Route::get('add', [CarrerasController::class, 'add'])->name('carrera.add');
            Route::post('', [CarrerasController::class, 'store'])->name('carrera.store');
            Route::delete('{model}', [CarrerasController::class, 'destroy'])->name('carrera.delete');
            Route::get('edit/{model}', [CarrerasController::class, 'show'])->name('carrera.edit');
            Route::patch('{model}', [CarrerasController::class, 'update'])->name('carrera.update');
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
        Route::get('areas', [ApiAppsController::class, 'colores']);
        Route::get('sexos', [ApiAppsController::class, 'sexos']);
    });
});