@extends('adminlte::page')

@section('title', 'Formulário de Produtos')

@section('content_header')
<div class="card">
    <div class="card-body">
    <h1>Formulário de Produtos</h1>
</div>
</div>
@stop

@section('content')
@if (@isset($produto))
<form action="/produtos/{{ $produto->id }}" method="post">
    @method('PUT')
@else
    <form action="/produtos" method="POST">
@endif
@csrf
<div class="card">
    <div class="card-body">
<form>
    <div class="form-group col-md-8 mb-3">
    <label>Descrição</label>
    <input type="text" class="form-control" name="descricao" value="{{ $produto->descricao ?? ''}}" required>
    </div>
    <div class="form-group col-md-8 mb-3">
    <label>Estoque</label>
    <input type="text" class="form-control" name="estoque" value="{{ $produto->estoque ?? ''}}" required>
    </div>
    <div class="form-group col-md-8 mb-3">
    <label>Preço</label>
    <input type="text" class="form-control" name="preco" value="{{ $produto->preco ?? ''}}" required>
    </div>
    <div class="form-group col-md-8 mb-3">
    <label>Fabricante</label>
    <input type="text" class="form-control" name="fabricante_id" value="{{ $produto->fabricante_id ?? ''}}" required>
    </div>
    <div class="form-group col-md-8 mb-3">
    <button type="submit" class="btn btn-primary mb-2">Salvar</button>
    <a class="btn btn-danger mb-2" href="/produtos">Cancelar</a>
</div>
</form>
</div>
</div>
@stop

@section('css')

@stop

@section('js')

@stop
