<?php

use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotoboyController;
use App\Http\Controllers\FilaController;

/*
|--------------------------------------------------------------------------
| Página inicial
|--------------------------------------------------------------------------
| Exibe o cadastro do motoboy
*/
Route::get('/', [MotoboyController::class, 'create'])
    ->name('home');

/*
|--------------------------------------------------------------------------
| Motoboys
|--------------------------------------------------------------------------
*/
Route::prefix('motoboys')->group(function () {

    Route::post('/', [MotoboyController::class, 'store'])
        ->name('motoboys.store');

    Route::get('{motoboy}/success', [MotoboyController::class, 'success'])
        ->name('motoboys.success');

    Route::get('{motoboy}/dashboard', [MotoboyController::class, 'dashboard'])
        ->name('motoboys.dashboard');

    Route::post('{motoboy}/fila', [MotoboyController::class, 'entrarNaFila'])
        ->name('motoboys.fila.entrar');
});

/*
|--------------------------------------------------------------------------
| Fila
|--------------------------------------------------------------------------
*/
Route::prefix('fila')->group(function () {

    Route::post('entrar/{motoboy}', [FilaController::class, 'entrar'])
        ->name('fila.entrar');

    Route::post('sair/{motoboy}', [FilaController::class, 'sair'])
        ->name('fila.sair');
});

/*
|--------------------------------------------------------------------------
| Links legais (SEO / Google Ads / LGPD)
|--------------------------------------------------------------------------
*/
Route::name('legal.')->group(function () {

    Route::view('/sobre', 'links_legais.sobre')->name('sobre');
    Route::view('/termos', 'links_legais.termos')->name('termos');
    Route::view('/privacidade', 'links_legais.privacidade')->name('privacidade');
    Route::view('/contato', 'links_legais.contato')->name('contato');
});

/*Enviar email*/
Route::post('/contato/enviar', [ContatoController::class, 'enviar'])
    ->name('contato.enviar');

