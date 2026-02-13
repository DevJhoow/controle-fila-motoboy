<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página não encontrada | Sistema de Motoboys</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO -->
    <meta name="robots" content="noindex, follow">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-dark text-light d-flex align-items-center justify-content-center vh-100">

<div class="container text-center">

    <div class="mb-4">
        <i class="bi bi-exclamation-triangle-fill text-warning display-1"></i>
    </div>

    <h1 class="fw-bold text-primary">
        Opa! Página não encontrada
    </h1>

    <p class="text-secondary mt-3">
        Parece que esse caminho não existe ou foi removido.
        <br>
        Mas fica tranquilo, você pode voltar com segurança 😉
    </p>

    <div class="d-grid gap-2 col-10 col-md-6 mx-auto mt-4">
        <a href="{{ route('home') }}" class="btn btn-primary btn-lg rounded-3">
            <i class="bi bi-house-door-fill me-1"></i>
            Voltar para o início
        </a>

        <a href="{{ route('legal.contato') }}" class="btn btn-outline-light rounded-3">
            <i class="bi bi-envelope-fill me-1"></i>
            Falar com suporte
        </a>
    </div>

    <footer class="mt-5 text-secondary small">
        © {{ date('Y') }} Sistema de Motoboys
    </footer>

</div>

</body>
</html>
