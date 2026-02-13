@extends('layouts.home')

@section('title', 'Sobre')

@section('content')

    <div class="mb-4">
        <h4 class="text-primary fw-bold mb-2">
            🚀 Sobre o sistema
        </h4>

        <p class="text-muted">
            Uma solução simples, rápida e pensada para o dia a dia dos motoboys.
        </p>
    </div>

    <div class="card bg-black border-secondary rounded-4 p-4 mb-4">
        <h5 class="text-success mb-3">
            🎯 Qual problema resolvemos?
        </h5>

        <p>
            Em muitos restaurantes, motoboys enfrentam desorganização,
            discussões e longas esperas por pedidos, pois não existe um
            controle claro de quem chegou primeiro.
        </p>

        <p class="mb-0">
            Este sistema resolve isso criando uma <strong>fila digital justa</strong>,
            visível para todos, evitando conflitos e trazendo mais organização.
        </p>
    </div>

    <div class="card bg-black border-secondary rounded-4 p-4 mb-4">
        <h5 class="text-warning mb-3">
            🛵 Benefícios para motoboys
        </h5>

        <ul class="mb-0">
            <li>✔️ Saber exatamente sua posição na fila</li>
            <li>✔️ Evitar discussões e injustiças</li>
            <li>✔️ Ganhar tempo e previsibilidade</li>
            <li>✔️ Usar direto do celular, sem app</li>
        </ul>
    </div>

    <div class="card bg-black border-secondary rounded-4 p-4 mb-4">
        <h5 class="text-info mb-3">
            🏪 Benefícios para restaurantes
        </h5>

        <ul class="mb-0">
            <li>✔️ Organização no atendimento</li>
            <li>✔️ Menos conflitos no balcão</li>
            <li>✔️ Fluxo de entregas mais eficiente</li>
            <li>✔️ Melhor experiência para parceiros</li>
        </ul>
    </div>

    <div class="card bg-black border-secondary rounded-4 p-4 mb-4">
        <h5 class="text-primary mb-3">
            📱 Pensado para mobile
        </h5>

        <p class="mb-0">
            O sistema foi desenvolvido com foco total em uso pelo celular,
            permitindo que o motoboy acesse rapidamente enquanto está na rua,
            sem precisar instalar aplicativos.
        </p>
    </div>

    <div class="text-center mt-4">
        <p class="text-muted mb-2">
            Tecnologia simples, funcional e focada em resolver problemas reais.
        </p>

        <a href="{{ route('home') }}" class="btn btn-outline-primary rounded-pill px-4">
            Voltar para o início
        </a>
    </div>

@endsection
