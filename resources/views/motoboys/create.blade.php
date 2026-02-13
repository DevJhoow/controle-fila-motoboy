@extends('layouts.home')

@section('title', 'Cadastro do Motoboy')

@section('content')

<h4 class="text-center text-primary mb-4">
    <i class="bi bi-person-plus-fill"></i>
    Cadastro do Motoboy
</h4>

<form method="POST" action="{{ route('motoboys.store') }}">
    @csrf

    <div class="input-group mb-3">
        <span class="input-group-text bg-dark text-primary border-secondary">
            <i class="bi bi-person"></i>
        </span>
        <input
            class="form-control bg-dark text-light border-secondary"
            name="nome"
            placeholder="Nome"
            required
            oninput="somenteLetras(this)">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text bg-dark text-primary border-secondary">
            <i class="bi bi-person-badge"></i>
        </span>
        <input
            class="form-control bg-dark text-light border-secondary"
            name="sobrenome"
            placeholder="Sobrenome"
            required
            oninput="somenteLetras(this)">
    </div>

    <div class="input-group mb-4">
        <span class="input-group-text bg-dark text-primary border-secondary">
            <i class="bi bi-shop"></i>
        </span>
        <select class="form-select bg-dark text-light border-secondary" name="restaurante_id" required>
            <option value="">Selecione o restaurante</option>
            @foreach ($restaurantes as $restaurante)
                <option value="{{ $restaurante->id }}">
                    {{ $restaurante->nome }}
                </option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-primary w-100 py-2 fw-bold rounded-3">
        <i class="bi bi-arrow-right-circle-fill"></i>
        Entrar para trabalhar
    </button>
</form>

<script>
function somenteLetras(input) {
    input.value = input.value.replace(/[^A-Za-zÀ-ÿ\s]/g, '');
}
</script>

@endsection
