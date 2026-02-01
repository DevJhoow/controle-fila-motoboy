<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Painel do Motoboy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
    .fila-card {
        border: 2px solid #facc15; /* amarelo */
        border-radius: 12px;
        background: #111; /* fundo escuro elegante */
        color: #facc15;
    }

    .fila-item {
        padding: 10px 0;
        border-bottom: 1px solid rgba(250, 204, 21, 0.3);
        color: #facc15;
        font-weight: 500;
    }

    .fila-item:last-child {
        border-bottom: none;
    }

    .fila-proximo {
        background: rgba(250, 204, 21, 0.15);
        border-radius: 8px;
        padding: 8px;
        font-weight: 700;
    }

    .badge-amarelo {
        background: #facc15;
        color: #000;
        font-size: 12px;
        padding: 4px 8px;
        border-radius: 12px;
        margin-left: 6px;
    }

    .titulo-fila {
        color: #facc15;
        font-weight: 700;
        text-align: center;
        margin-bottom: 12px;
    }

      .badge-voce {
        background: #2563eb; /* azul */
        color: #fff;
        font-size: 12px;
        padding: 4px 8px;
        border-radius: 12px;
        margin-left: 6px;
        font-weight: 600;
    }

    .badge-proximo {
        background: #16a34a; /* verde */
        color: #fff;
        font-size: 12px;
        padding: 4px 8px;
        border-radius: 12px;
        margin-left: 6px;
        font-weight: 600;
    }

    .btn-entrar {
    width: 100%;
    padding: 14px;
    background: #16a34a;
    color: #fff;
    border: none;
    border-radius: 10px;
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 12px;
}

.btn-sair {
    width: 100%;
    padding: 14px;
    background: #dc2626;
    color: #fff;
    border: none;
    border-radius: 10px;
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 12px;
}
</style>

</head>
<body>

<div class="container py-4">

    <!-- Header -->
    <div class="text-center mb-4">
        <h4 class="fw-bold">
            Olá, {{ $motoboy->nome }} 👋
        </h4>
        <p class="text-info mb-0">
            <i class="bi bi-shop"></i>
            {{ $motoboy->restaurante->nome }}
        </p>
    </div>

    <!-- Status -->
    <div class="card p-3 text-center mb-4">
        <p class="mb-1">Status atual</p>
        <span class="badge bg-warning text-dark">
            Aguardando
        </span>
    </div>

    <!-- Botão Entrar / Sair da fila -->
    <div class="text-center mb-4">

        @if($naFila)
            <form method="POST" action="{{ route('fila.sair', $motoboy->id) }}">
                @csrf
                <button type="submit" class="btn btn-danger">
                    Sair da fila
                </button>
            </form>
        @else
            <form method="POST" action="{{ route('fila.entrar', $motoboy->id) }}">
                @csrf
                <button type="submit" class="btn btn-success">
                    Entrar na fila
                </button>
            </form>
        @endif

    </div>

    <!-- Mensagem -->
    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <!-- Card da minha posição -->
    @if($minhaPosicao)
        <div class="card p-3 mb-4 text-center border-success">
            <h5 class="text-success mb-1">
                <i class="bi bi-check-circle"></i>
                Você está na fila
            </h5>

            <p class="mb-0">
                Sua posição:
                <strong class="fs-4 text-warning">
                    {{ $minhaPosicao->posicao }}º
                </strong>
            </p>
        </div>
    @endif

    <!-- Fila -->
    <div class="fila-card p-3 mt-4">
        <h5 class="titulo-fila">
            ⏳ Fila de espera
        </h5>

        @if($fila->isEmpty())
            <p class="text-center">
                Nenhum motoboy na fila.
            </p>
        @else
            @foreach($fila as $item)
                <div class="fila-item {{ $item->posicao === 1 ? 'fila-proximo' : '' }}">
                    <strong class="text-warning">
                        {{ $item->posicao }}º
                    </strong>
                    —
                    <span class="text-warning">
                        {{ $item->motoboy->nome }}  {{ $item->motoboy->sobrenome }}
                    </span>

                    @if($item->motoboy_id === $motoboy->id)
                        <span class="badge-voce">
                            Você
                        </span>
                    @endif

                    @if($item->posicao === 1)
                        <span class="badge-proximo">
                            Próximo
                        </span>
                    @endif
                </div>
            @endforeach
        @endif
    </div>

</div>


</body>
</html>
