<?php
use App\Http\Controllers\AntecedenteController;
use App\Http\Controllers\ReferidosController;
use App\Http\Controllers\TipoConsultaController;
use App\Http\Controllers\PlantillaController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CitasController;
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
    // Antecedentes
    Route::get('/antecedentes-json', [AntecedenteController::class, 'json'])->name('antecedentes.json');
    Route::get('/antecedentes', [AntecedenteController::class, 'index'])->name('antecedentes.index');
    Route::post('/antecedentes/guardar-antecedente', [AntecedenteController::class, 'store'])->name('antecedentes.store');
    Route::get('/antecedentes/{id}/editar-antecedente', [AntecedenteController::class, 'edit'])->name('antecedentes.edit');
    Route::post('/antecedentes/{id}/actualizar-antecedente', [AntecedenteController::class, 'update'])->name('antecedentes.update');
    Route::delete('/antecedentes/{id}/eliminar-antecedente', [AntecedenteController::class, 'destroy'])->name('antecedentes.destroy');

    // Referidos
    Route::get('/referidos-json', [ReferidosController::class, 'json'])->name('referidos.json');
    Route::get('/referidos', [ReferidosController::class, 'index'])->name('referidos.index');
    Route::post('/referidos/guardar-referido', [ReferidosController::class, 'store'])->name('referidos.store');
    Route::delete('/referidos/{id}/eliminar-referido', [ReferidosController::class, 'destroy'])->name('referidos.destroy');

    // Tipo de Consulta
    Route::get('/tipo-de-consultas-json', [TipoConsultaController::class, 'json'])->name('tipo_consultas.json');
    Route::get('/tipo-de-consultas', [TipoConsultaController::class, 'index'])->name('tipo_consultas.index');
    Route::post('/tipo-de-consultas/guardar-tipo-de-consulta', [TipoConsultaController::class, 'store'])->name('tipo_consultas.store');
    Route::delete('/tipo-de-consultas/{id}/eliminar-tipo-de-consulta', [TipoConsultaController::class, 'destroy'])->name('tipo_consultas.destroy');

    // Tipo de Consulta
    Route::get('/plantillas-json', [PlantillaController::class, 'json'])->name('plantillas.json');
    Route::get('/plantillas', [PlantillaController::class, 'index'])->name('plantillas.index');
    Route::post('/plantillas/guardar-plantilla', [PlantillaController::class, 'store'])->name('plantillas.store');
    Route::get('/plantillas/{id}/ver-plantilla', [PlantillaController::class, 'show'])->name('plantillas.show');
    Route::get('/plantillas/{id}/editar-plantilla', [PlantillaController::class, 'edit'])->name('plantillas.edit');
    Route::post('/plantillas/{id}/actualizar-plantilla', [PlantillaController::class, 'update'])->name('plantillas.update');
    Route::delete('/plantillas/{id}/eliminar-plantilla', [PlantillaController::class, 'destroy'])->name('plantillas.destroy');

    // Medicamentos
    Route::get('/medicamentos-json', [MedicamentoController::class, 'json'])->name('medicamentos.json');
    Route::get('/medicamentos', [MedicamentoController::class, 'index'])->name('medicamentos.index');
    Route::post('/medicamentos/guardar-medicamento', [MedicamentoController::class, 'store'])->name('medicamentos.store');
    Route::get('/medicamentos/{id}/ver-medicamento', [MedicamentoController::class, 'show'])->name('medicamentos.show');
    Route::get('/medicamentos/{id}/editar-medicamento', [MedicamentoController::class, 'edit'])->name('medicamentos.edit');
    Route::post('/medicamentos/{id}/actualizar-medicamento', [MedicamentoController::class, 'update'])->name('medicamentos.update');
    Route::delete('/medicamentos/{id}/eliminar-medicamento', [MedicamentoController::class, 'destroy'])->name('medicamentos.destroy');

     // Usuarios
    Route::get('/usuarios-json', [UserController::class, 'json'])->name('usuarios.json');
    Route::get('/usuarios', [UserController::class, 'index'])->name('usuarios.index');
    Route::post('/usuarios/guardar-usuario', [UserController::class, 'store'])->name('usuarios.store');
    Route::get('/usuarios/{id}/ver-usuario', [UserController::class, 'show'])->name('usuarios.show');
    Route::get('/usuarios/{id}/editar-usuario', [UserController::class, 'edit'])->name('usuarios.edit');
    Route::post('/usuarios/{id}/actualizar-usuario', [UserController::class, 'update'])->name('usuarios.update');
    Route::delete('/usuarios/{id}/eliminar-usuario', [UserController::class, 'destroy'])->name('usuarios.destroy');
});

// Citas
Route::get('/citas-json', [CitasController::class, 'json'])->name('citas.json');
Route::get('/citas', [CitasController::class, 'index'])->name('citas.index');
Route::post('/citas/guardar-cita', [CitasController::class, 'store'])->name('citas.store');
Route::delete('/citas/{id}/eliminar-cita', [CitasController::class, 'destroy'])->name('citas.destroy');
