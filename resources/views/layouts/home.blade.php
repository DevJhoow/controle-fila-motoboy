<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Sistema de Motoboys')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0d6efd">

    <!-- SEO básico -->
    <meta name="description" content="Sistema inteligente de fila para motoboys e restaurantes">
    <meta name="author" content="Seu Nome">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(180deg, #0b0f19, #000);
            min-height: 100vh;
            font-family: system-ui, -apple-system, BlinkMacSystemFont;
        }

        .app-container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .app-header {
            padding: 14px;
            text-align: center;
            color: #fff;
        }

        .app-header h1 {
            font-size: 1.1rem;
            font-weight: 700;
            margin: 0;
        }

        .app-header span {
            font-size: .85rem;
            color: #adb5bd;
        }

        .app-content {
            flex: 1;
            display: flex;
            align-items: center;
            padding: 16px;
        }

        .app-card {
            width: 100%;
            background: #0f172a;
            border-radius: 20px;
            padding: 24px;
            box-shadow: 0 0 40px rgba(0,0,0,.6);
        }

        footer {
            text-align: center;
            font-size: .8rem;
            padding: 12px;
            color: #6c757d;
        }

        footer a {
            color: #6c757d;
            text-decoration: none;
            margin: 0 6px;
        }

        footer a:hover {
            color: #0d6efd;
        }

        ::placeholder {
            color: #6c757d !important;
        }
    </style>
</head>

<body>

<div class="app-container">

    <header class="app-header">
        <h1>
            <i class="bi bi-truck-front-fill text-primary"></i>
            Fila Motoboy
        </h1>
        <span>Organização inteligente de entregas</span>
    </header>

    <!-- CONTEÚDO DINÂMICO -->
    <main class="app-content">
        <div class="app-card">
            @yield('content')
        </div>
    </main>

    <footer>
       <a href="{{ route('legal.sobre') }}">Sobre</a>
       <a href="{{ route('legal.termos') }}">Termos de uso</a>
       <a href="{{ route('legal.privacidade') }}">Privacidade</a>
       <a href="{{ route('legal.contato') }}">Contato</a>
        <br>
        © {{ date('Y') }} • Sistema de Motoboys
    </footer>

</div>

</body>
</html>
