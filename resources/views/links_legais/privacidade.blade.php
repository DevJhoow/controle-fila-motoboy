@extends('layouts.home')

@section('title', 'Privacidade')

@section('content')

    <div class="container py-5">

        <!-- Título -->
        <div class="text-center mb-5">
            <h2 class="fw-bold text-primary">
                <i class="bi bi-shield-lock-fill"></i>
                Política de Privacidade
            </h2>
            <p class="text-secondary mt-2">
                Sua privacidade é importante para nós.
            </p>
        </div>

        <!-- Conteúdo -->
        <div class="card bg-black text-light border-0 rounded-4 shadow-lg mx-auto" style="max-width: 900px;">
            <div class="card-body p-4 p-md-5">

                <p class="text-secondary">
                    Esta Política de Privacidade descreve como o <strong>Sistema de Motoboys</strong> coleta,
                    utiliza e protege as informações fornecidas pelos usuários.
                </p>

                <hr class="border-secondary">

                <h5 class="text-primary mt-4">
                    <i class="bi bi-person-check"></i> Informações coletadas
                </h5>
                <p class="text-secondary">
                    Coletamos apenas informações necessárias para o funcionamento do sistema, como:
                </p>
                <ul class="text-secondary">
                    <li>Nome e sobrenome do motoboy</li>
                    <li>Restaurante selecionado</li>
                    <li>Dados operacionais relacionados à fila</li>
                </ul>

                <h5 class="text-primary mt-4">
                    <i class="bi bi-gear"></i> Uso das informações
                </h5>
                <p class="text-secondary">
                    As informações coletadas são utilizadas exclusivamente para:
                </p>
                <ul class="text-secondary">
                    <li>Gerenciar filas de motoboys</li>
                    <li>Organizar a ordem de atendimento</li>
                    <li>Melhorar a experiência de motoboys e restaurantes</li>
                </ul>

                <h5 class="text-primary mt-4">
                    <i class="bi bi-lock"></i> Segurança dos dados
                </h5>
                <p class="text-secondary">
                    Adotamos medidas técnicas e organizacionais para proteger os dados contra acessos não autorizados,
                    perda ou divulgação indevida.
                </p>

                <h5 class="text-primary mt-4">
                    <i class="bi bi-share"></i> Compartilhamento de informações
                </h5>
                <p class="text-secondary">
                    Não vendemos, alugamos ou compartilhamos dados pessoais com terceiros,
                    exceto quando exigido por lei.
                </p>

                <h5 class="text-primary mt-4">
                    <i class="bi bi-person-lines-fill"></i> Direitos do usuário
                </h5>
                <p class="text-secondary">
                    O usuário pode solicitar a correção ou exclusão de seus dados a qualquer momento,
                    conforme previsto na Lei Geral de Proteção de Dados (LGPD).
                </p>

                <h5 class="text-primary mt-4">
                    <i class="bi bi-arrow-repeat"></i> Alterações nesta política
                </h5>
                <p class="text-secondary">
                    Esta política pode ser atualizada periodicamente. Recomendamos que o usuário
                    revise esta página sempre que utilizar o sistema.
                </p>

            </div>
             <a href="{{ route('home') }}" class="btn btn-outline-primary rounded-pill px-4">
                    Voltar para o início
             </a>
        </div>

    </div>

@endsection
