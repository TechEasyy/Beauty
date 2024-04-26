<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\CapaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ExibirController;
use App\Http\Controllers\CronogramaController;
use App\Http\Controllers\ProcedimentoController;
use App\Http\Controllers\AtendimentoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CapaController::class, 'capa'])->name('capa');
Route::get('/cronograma/exibir', [CronogramaController::class, 'exibir'])->name('montarCronograma');
Route::get('/agenda/pagina02', [AgendaController::class, 'pagina02'])->name('agenda');
Route::get('/crud/crudProcedimento', [ProcedimentoController::class, 'crudProcedimento'])->name('procedimento');
Route::get('/crud/crudCliente', [ClienteController::class, 'crudCliente'])->name('clientes');
Route::get('/atendimento/TerceiraTela', [AtendimentoController::class, 'TerceiraTela'])->name('atendimento');