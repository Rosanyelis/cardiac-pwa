<?php
use App\Http\Controllers\AntecedenteController;
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
require __DIR__.'/auth.php';
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['prefix' => '/configuracion'], function() {
    Route::get('/antecedentes', [AntecedenteController::class, 'index'])->name('antecedentes.index');
    Route::get('/antecedentes/nuevo-antecedente', [AntecedenteController::class, 'create'])->name('antecedentes.create');
    Route::post('/antecedentes/guardar-antecedente', [AntecedenteController::class, 'store'])->name('antecedentes.store');
});
