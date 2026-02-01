<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Motoboy</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">

<div class="container vh-100 d-flex align-items-center">
    <div class="card w-100 p-4 bg-black text-light rounded-4">

        <h4 class="text-center text-primary mb-4">
            Cadastro do Motoboy
        </h4>

        <form method="POST" action="{{ route('motoboys.store') }}">
            @csrf

            <input class="form-control mb-3" name="nome" placeholder="Nome" required>
            <input class="form-control mb-3" name="sobrenome" placeholder="Sobrenome" required>

            <select class="form-select mb-4" name="restaurante_id" required>
                <option value="">Selecione o restaurante</option>
                @foreach ($restaurantes as $restaurante)
                    <option value="{{ $restaurante->id }}">
                        {{ $restaurante->nome }}
                    </option>
                @endforeach
            </select>

            <button class="btn btn-primary w-100">
                Entrar para trabalhar
            </button>
        </form>

    </div>
</div>

</body>
</html>
