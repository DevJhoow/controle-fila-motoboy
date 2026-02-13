@extends('layouts.home')

@section('title', 'Termos de uso')

@section('content')

    <div class="container py-5">

        <!-- Título -->
        <div class="text-center mb-5">
            <h2 class="fw-bold text-primary">
                <i class="bi bi-file-earmark-text-fill"></i>
                Termos de Uso
            </h2>
            <p class="text-secondary mt-2">
                Leia atentamente antes de utilizar o sistema.
            </p>
        </div>

        <!-- Conteúdo -->
        <div class="card bg-black text-light border-0 rounded-4 shadow-lg mx-auto" style="max-width: 900px;">
            <div class="card-body p-4 p-md-5">

                <p class="text-secondary">
                    Ao acessar e utilizar o <strong>Sistema de Motoboys</strong>,
                    você concorda com os termos e condições descritos abaixo.
                </p>

                <hr class="border-secondary">

                <h5 class="text-primary mt-4">
                    <i class="bi bi-check-circle"></i> Aceitação dos termos
                </h5>
                <p class="text-secondary">
                    O uso do sistema implica na aceitação integral destes Termos de Uso.
                    Caso não concorde, o usuário não deve utilizar a plataforma.
                </p>

                <h5 class="text-primary mt-4">
                    <i class="bi bi-person"></i> Uso da plataforma
                </h5>
                <p class="text-secondary">
                    O sistema destina-se ao gerenciamento de filas de motoboys em restaurantes,
                    facilitando a organização e o fluxo de atendimento.
                </p>

                <h5 class="text-primary mt-4">
                    <i class="bi bi-exclamation-triangle"></i> Responsabilidades do usuário
                </h5>
                <ul class="text-secondary">
                    <li>Fornecer informações verdadeiras e atualizadas</li>
                    <li>Utilizar o sistema de forma ética e responsável</li>
                    <li>Não tentar explorar falhas ou prejudicar o funcionamento do sistema</li>
                </ul>

                <h5 class="text-primary mt-4">
                    <i class="bi bi-shield-x"></i> Limitação de responsabilidade
                </h5>
                <p class="text-secondary">
                    O Sistema de Motoboys não se responsabiliza por atrasos, falhas operacionais
                    externas ou problemas decorrentes do uso indevido da plataforma.
                </p>

                <h5 class="text-primary mt-4">
                    <i class="bi bi-x-circle"></i> Suspensão ou encerramento
                </h5>
                <p class="text-secondary">
                    Reservamo-nos o direito de suspender ou encerrar o acesso de usuários
                    que violem estes termos ou utilizem o sistema de forma inadequada.
                </p>

                <h5 class="text-primary mt-4">
                    <i class="bi bi-arrow-repeat"></i> Alterações nos termos
                </h5>
                <p class="text-secondary">
                    Estes Termos de Uso podem ser alterados a qualquer momento,
                    sendo responsabilidade do usuário revisá-los periodicamente.
                </p>

            </div>
             <a href="{{ route('home') }}" class="btn btn-outline-primary rounded-pill px-4">
                    Voltar para o início
             </a>
        </div>

    </div>

@endsection
