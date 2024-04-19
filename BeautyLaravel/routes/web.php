<?php

use App\Http\Controllers\CapaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ExibirController;
use App\Http\Controllers\CronogramaController;
use App\Http\Controllers\ProcedimentoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CapaController::class, 'index'])->name('exibir');
Route::get('/cronograma/exibir', [CronogramaController::class, 'exibir'])->name('montarCronograma');
Route::get('/agenda/pagina02', [CronogramaController::class, 'pagina02'])->name('agenda');
Route::get('/crud/crudProcedimento', [ProcedimentoController::class, 'crudProcedimento'])->name('procedimento');
Route::get('/crud/crudCliente', [ClienteController::class, 'crudCliente'])->name('clientes');
