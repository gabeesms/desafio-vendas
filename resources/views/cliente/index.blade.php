@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
<div class="card">
    <div class="card-body">
    <h1>Clientes</h1>
    </div>
</div>
@stop

@section('content')
<div class="card">
    <div class="card-body">
    <a href="{{ route('clientes.create') }}" class="btn btn-primary">Cadastrar Novo</a>
    <table class="table table-bordered">
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Cpf</th>
            <th>Cep</th>
            <th>Logradouro</th>
            <th>Bairro</th>
            <th>Localidade</th>
            <th>Ações</th>
        </tr>

        @foreach ($clientes as $c)
            <tr>
                <td>{{ $c->nome}}</td>
                <td>{{ $c->telefone}}</td>
                <td>{{ $c->email}}</td>
                <td>{{ $c->cpf}}</td>
                <td>{{ $c->cep}}</td>
                <td>{{ $c->logradouro}}</td>
                <td>{{ $c->bairro}}</td>
                <td>{{ $c->localidade}}</td>
                <td>
                    <a href="/clientes/{{ $c->id }}/edit">Editar</a>
                    <a href="/clientes/{{ $c->id }}">Excluir</a>
            </tr>
        @endforeach
    </table>
    </div>
</div>
    @stop

@section('css')

@stop

@section('js')

@stop
