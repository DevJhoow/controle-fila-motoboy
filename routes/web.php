<?php

use App\Http\Controllers\FilaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotoboyController;

Route::get('/', [MotoboyController::class, 'create']);

Route::post('/motoboys', [MotoboyController::class, 'store'])
    ->name('motoboys.store');

Route::get('/motoboys/{motoboy}/success', 
    [MotoboyController::class, 'success']
)->name('motoboys.success');

Route::get('/motoboys/{motoboy}/dashboard', 
    [MotoboyController::class, 'dashboard']
)->name('motoboys.dashboard');

Route::get('/motoboys/{motoboy}/dashboard', 
    [MotoboyController::class, 'dashboard']
)->name('motoboys.dashboard');

Route::post('/motoboys/{motoboy}/fila', 
    [MotoboyController::class, 'entrarNaFila']
)->name('motoboys.fila.entrar');

Route::post('/fila/entrar/{motoboy}', [FilaController::class, 'entrar'])
    ->name('fila.entrar');

Route::post('/fila/sair/{motoboy}', [FilaController::class, 'sair'])
    ->name('fila.sair');



