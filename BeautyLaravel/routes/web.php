<?php

use App\Http\Controllers\ExibirController;
use App\Http\Controllers\CronogramaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ExibirController::class, 'index'])->name('exibir');
Route::get('/cronograma/exibir', [CronogramaController::class, 'exibir'])->name('montarCronograma');
Route::get('/agenda/pagina02', [CronogramaController::class, 'pagina02'])->name('agenda');
