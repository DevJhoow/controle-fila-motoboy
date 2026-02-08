<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Motoboy</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-dark text-light">

<div class="container vh-100 d-flex align-items-center">
    <div class="card w-100 p-4 bg-black text-light rounded-4 shadow-lg">

        <h4 class="text-center text-primary mb-4">
            <i class="bi bi-person-plus-fill"></i>
            Cadastro do Motoboy
        </h4>

        <form method="POST" action="{{ route('motoboys.store') }}">
            @csrf

            <!-- Nome -->
            <div class="input-group mb-3">
                <span class="input-group-text bg-dark text-primary border-secondary">
                    <i class="bi bi-person"></i>
                </span>
                <input
                    class="form-control bg-dark text-light border-secondary"
                    name="nome"
                    placeholder="Nome"
                    required
                    oninput="somenteLetras(this)"
                >
            </div>

            <!-- Sobrenome -->
            <div class="input-group mb-3">
                <span class="input-group-text bg-dark text-primary border-secondary">
                    <i class="bi bi-person-badge"></i>
                </span>
                <input
                    class="form-control bg-dark text-light border-secondary"
                    name="sobrenome"
                    placeholder="Sobrenome"
                    required
                    oninput="somenteLetras(this)"
                >
            </div>

            <!-- Restaurante -->
            <div class="input-group mb-4">
                <span class="input-group-text bg-dark text-primary border-secondary">
                    <i class="bi bi-shop"></i>
                </span>
                <select class="form-select bg-dark text-light border-secondary"
                        name="restaurante_id"
                        required>
                    <option value="">Selecione o restaurante</option>
                    @foreach ($restaurantes as $restaurante)
                        <option value="{{ $restaurante->id }}">
                            {{ $restaurante->nome }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Botão -->
            <button class="btn btn-primary w-100 py-2 fw-bold rounded-3">
                <i class="bi bi-truck-front-fill me-1"></i>
                Entrar para trabalhar
            </button>
        </form>

    </div>
</div>

<script>
    function somenteLetras(input) {
        input.value = input.value.replace(/[^A-Za-zÀ-ÿ\s]/g, '');
    }
</script>

</body>
</html>
