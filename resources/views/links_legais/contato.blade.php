@extends('layouts.home')

@section('title', 'Contato')

@section('content')

    <div class="container py-5">

        <!-- Cabeçalho -->
        <div class="text-center mb-5">
            <h2 class="fw-bold text-primary">
                <i class="bi bi-envelope-paper-heart"></i>
                Fale Conosco
            </h2>
            <p class="text-secondary mt-2">
                Dúvidas, sugestões ou parcerias? Estamos prontos para ouvir você.
            </p>
        </div>

        <!-- Card -->
        <div class="card bg-black text-light border-0 rounded-4 shadow-lg mx-auto" style="max-width: 520px;">
            <div class="card-body p-4">

                @if (session('success'))
                    <div class="alert alert-success text-center">
                        <i class="bi bi-check-circle-fill"></i>
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('contato.enviar') }}">
                     @csrf

                    <!-- Nome -->
                    <div class="mb-3">
                        <label class="form-label text-secondary">
                            <i class="bi bi-person"></i> Nome
                        </label>
                        <input
                            type="text"
                            name="nome"
                            class="form-control bg-dark text-light border-secondary"
                            placeholder="Seu nome"
                            required
                        >
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label class="form-label text-secondary">
                            <i class="bi bi-envelope"></i> E-mail
                        </label>
                        <input
                            type="email"
                            name="email"
                            class="form-control bg-dark text-light border-secondary"
                            placeholder="seu@email.com"
                            required
                        >
                    </div>

                    <!-- Mensagem -->
                    <div class="mb-4">
                        <label class="form-label text-secondary">
                            <i class="bi bi-chat-dots"></i> Mensagem
                        </label>
                        <textarea
                            name="mensagem"
                            rows="4"
                            class="form-control bg-dark text-light border-secondary"
                            placeholder="Escreva sua mensagem..."
                            required
                        ></textarea>
                    </div>

                    <!-- Botão -->
                    <button class="btn btn-primary w-100 py-2 fw-bold rounded-3">
                        <i class="bi bi-send-fill me-1"></i>
                        Enviar mensagem
                    </button>

                </form>

            </div>
             <a href="{{ route('home') }}" class="btn btn-outline-primary rounded-pill px-4">
                    Voltar para o início
             </a>
        </div>

    </div>

@endsection
