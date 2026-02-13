@extends('layouts.home')

@section('title', 'Cadastro realizado')

@section('content')

<style>
        body {
            min-height: 100vh;
            background: linear-gradient(180deg, #0d1b2a, #000);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            background-color: #0b2545;
            border: none;
            border-radius: 18px;
            box-shadow: 0 12px 30px rgba(0,0,0,0.5);
        }

        .icon-success {
            font-size: 3.5rem;
            color: #22c55e;
        }

        .btn-primary {
            background: linear-gradient(135deg, #1d4ed8, #2563eb);
            border: none;
            border-radius: 14px;
            font-weight: 600;
            padding: 12px;
        }

        .text-muted {
            color: #9ca3af !important;
        }
    </style>

    <div class="container px-3">
        <div class="card p-4 text-center">

            <div class="mb-3">
                <i class="bi bi-check-circle-fill icon-success"></i>
            </div>

        <h4 class="fw-bold mb-2 text-success">
                Cadastro realizado!
        </h4>


            <p class="text-muted mb-4">
                Seja bem-vindo à fila de entregas
            </p>

            <p class="mb-1">
                <strong class="text-success">
                    {{ $motoboy->nome }} {{ $motoboy->sobrenome }}
                </strong>
            </p>

            <p class="mb-4">
                <strong style="color:#000000;">
                {{ $motoboy->restaurante?->nome }}
                </strong>
            </p>

            <div class="d-grid">
                <a href="{{ route('motoboys.dashboard', $motoboy->id) }}"
                class="btn btn-primary btn-lg">
                    <i class="bi bi-speedometer2 me-1"></i>
                    Ir para o painel
                </a>
            </div>

        </div>
    </div>

@endsection
