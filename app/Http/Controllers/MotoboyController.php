<?php

namespace App\Http\Controllers;

use App\Models\Fila;
use App\Models\Motoboy;
use App\Models\Restaurante;
use Illuminate\Http\Request;

class MotoboyController extends Controller
{
     public function create()
    {
        $restaurantes = Restaurante::all();
        return view('motoboys.create', compact('restaurantes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => [
                'required',
                'regex:/^[A-Za-zÀ-ÿ\s]+$/'
            ],
            'sobrenome' => [
                'required',
                'regex:/^[A-Za-zÀ-ÿ\s]+$/'
            ],
            'restaurante_id' => 'required|exists:restaurantes,id',
        ], [
            'nome.regex' => 'O nome deve conter apenas letras.',
            'sobrenome.regex' => 'O sobrenome deve conter apenas letras.',
        ]);

        $motoboy = Motoboy::create(
            $request->only(['nome', 'sobrenome', 'restaurante_id'])
        );

        return redirect()
            ->route('motoboys.success', $motoboy);
    }


    public function success(Motoboy $motoboy)
    {
        return view('motoboys.success', compact('motoboy'));
    }

  public function dashboard(Motoboy $motoboy)
{
    // fila do restaurante
    $fila = Fila::where('restaurante_id', $motoboy->restaurante_id)
        ->where('ativo', true)
        ->orderBy('posicao')
        ->with('motoboy')
        ->get();

    // verifica se o motoboy está na fila
    $naFila = $fila->contains('motoboy_id', $motoboy->id);

    // posição do motoboy na fila (se estiver)
    $minhaPosicao = $fila
        ->where('motoboy_id', $motoboy->id)
        ->first();

    return view('motoboys.dashboard', compact(
        'motoboy',
        'fila',
        'naFila',
        'minhaPosicao'
    ));
}



    public function entrarNaFila(Motoboy $motoboy)
    {
        $jaNaFila = Fila::where('motoboy_id', $motoboy->id)
            ->where('ativo', true)
            ->exists();

        if ($jaNaFila) {
            return redirect()
                ->route('motoboys.dashboard', $motoboy)
                ->with('success', 'Você já está na fila.');
        }

        $ultimaPosicao = Fila::where('restaurante_id', $motoboy->restaurante_id)
            ->where('ativo', true)
            ->max('posicao');

        $novaPosicao = $ultimaPosicao ? $ultimaPosicao + 1 : 1;

        Fila::create([
            'motoboy_id' => $motoboy->id,
            'restaurante_id' => $motoboy->restaurante_id,
            'posicao' => $novaPosicao,
            'ativo' => true
        ]);

        return redirect()
            ->route('motoboys.dashboard', $motoboy)
            ->with('success', 'Você entrou na fila!');
    }



}
