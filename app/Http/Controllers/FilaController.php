<?php

namespace App\Http\Controllers;

use App\Models\Fila;
use App\Models\Motoboy;
use Illuminate\Http\Request;

class FilaController extends Controller
{
    public function entrar($motoboyId)
    {
        $motoboy = Motoboy::findOrFail($motoboyId);

        $jaNaFila = Fila::where('motoboy_id', $motoboyId)
            ->where('ativo', true)
            ->exists();

        if ($jaNaFila) {
            return back();
        }

        $ultimaPosicao = Fila::where('restaurante_id', $motoboy->restaurante_id)
            ->where('ativo', true)
            ->max('posicao') ?? 0;

        Fila::create([
            'motoboy_id'     => $motoboy->id,
            'restaurante_id'=> $motoboy->restaurante_id, // 🔥 ESSENCIAL
            'posicao'        => $ultimaPosicao + 1,
            'ativo'          => true,
        ]);

        return back()->with('success', 'Você entrou na fila!');
    }


    public function sair($motoboyId)
    {
        $registro = Fila::where('motoboy_id', $motoboyId)->first();

        if (!$registro) {
            return back();
        }

        $posicaoSaida = $registro->posicao;

        // remove o motoboy
        $registro->delete();

        // ajusta posições
        Fila::where('posicao', '>', $posicaoSaida)
            ->decrement('posicao');

        return back();
    }
}
