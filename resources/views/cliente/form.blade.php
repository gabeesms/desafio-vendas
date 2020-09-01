@extends('adminlte::page')

@section('title', 'Formulário de Clientes')

@section('content_header')
<div class="card">
    <div class="card-body">
    <h1>Formulário de Clientes</h1>
</div>
</div>
@stop

@section('content')
@if (@isset($cliente))
<form action="/clientes/{{ $cliente->id }}" method="post">
    @method('PUT')
@else
    <form action="/clientes" method="POST">
@endif
@csrf
<div class="card">
    <div class="card-body">
<form>
    <div class="form-group col-md-8 mb-3">
    <label>Nome</label>
    <input type="text" class="form-control" name="nome" value="{{ $cliente->nome ?? ''}}" required>
    </div>
    <div class="form-group col-md-8 mb-3">
    <label>Telefone</label>
    <input type="text" class="form-control" name="telefone" value="{{ $cliente->telefone ?? ''}}" required>
    </div>
    <div class="form-group col-md-8 mb-3">
    <label>Email</label>
    <input type="text" class="form-control" name="email" value="{{ $cliente->email ?? ''}}" required>
    </div>
    <div class="form-group col-md-8 mb-3">
    <label>CPF</label>
    <input type="text" class="form-control" name="cpf" value="{{ $cliente->cpf ?? ''}}" required>
    </div>
    <div class="form-group col-md-8 mb-3">
    <label>CEP</label>
    <input type="text" class="form-control" name="cep" value="{{ $cliente->cep ?? ''}}" required>
    </div>
    <div class="form-group col-md-8 mb-3">
    <label>Logradouro</label>
    <input type="text" class="form-control" name="logradouro" value="{{ $cliente->logradouro ?? ''}}" required>
    </div>
    <div class="form-group col-md-8 mb-3">
    <label>Bairro</label>
    <input type="text" class="form-control" name="bairro" value="{{ $cliente->bairro ?? ''}}" required>
    </div>
    <div class="form-group col-md-8 mb-3">
    <label>Localidade</label>
    <input type="text" class="form-control" name="localidade" value="{{ $cliente->localidade ?? ''}}" required>
    </div>
    <div class="form-group col-md-8 mb-3">
    <button type="submit" class="btn btn-primary mb-2">Salvar</button>
    <a class="btn btn-danger mb-2" href="/clientes">Cancelar</a>
</div>
</form>
</div>
</div>
@stop

@section('css')

@stop

@section('js')

@stop
