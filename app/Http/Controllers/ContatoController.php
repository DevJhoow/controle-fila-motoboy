<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
     public function enviar(Request $request)
     {
        $dados = $request->validate([
            'nome' => 'required|string|max:100',
            'email' => 'required|email',
            'mensagem' => 'required|string|max:2000',
        ]);

        Mail::raw(
            "Nome: {$dados['nome']}\nEmail: {$dados['email']}\n\nMensagem:\n{$dados['mensagem']}",
            function ($message) use ($dados) {
                $message->to('jonathan.luisrodrigues@hotmail.com')
                        ->subject('📩 Novo contato do sistema de motoboys')
                        ->replyTo($dados['email'], $dados['nome']);
            }
        );

        return back()->with('success', 'Mensagem enviada com sucesso!');
     }
}
