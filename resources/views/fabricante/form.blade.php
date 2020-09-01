    @extends('adminlte::page')

    @section('title', 'Formulário de Fabricante')

    @section('content_header')
    <div class="card">
        <div class="card-body">
        <h1>Formulário de Fabricante teste</h1>
    </div>
    </div>
    @stop

    @section('content')
    @if (@isset($fabricante))
    <form action="/fabricantes/{{ $fabricante->id }}" method="post">
        @method('PUT')
    @else
        <form action="/fabricantes" method="POST">
    @endif
    @csrf
    <div class="card">
        <div class="card-body">
    <form>
        <div class="form-group col-md-8 mb-3">
        <label>Nome</label>
        <input type="text" class="form-control" name="nome" value="{{ $fabricante->nome ?? ''}}" required>
        </div>
        <div class="form-group col-md-8 mb-3">
        <label>Site</label>
        <input type="text" class="form-control" name="site" value="{{ $fabricante->site ?? ''}}" required>
        </div>
        <div class="form-group col-md-8 mb-3">
        <button type="submit" class="btn btn-primary mb-2">Salvar</button>
        <a class="btn btn-danger mb-2" href="/fabricantes">Cancelar</a>
    </div>
    </form>
    </div>
    </div>
    @stop

    @section('css')

    @stop

    @section('js')

    @stop
