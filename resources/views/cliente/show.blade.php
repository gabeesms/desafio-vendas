@extends('adminlte::page')

@section('title', 'Mensagem')

@section('content_header')

@stop

@section('content')
    <div class="card">
    <div class="card-body">
    <h4>Deseja mesmo excluir o cliente '{{ $cliente->nome }}'?</h4>
    <div class="form-group col-md-8 mb-3">
    <form action="/clientes/{{ $cliente->id }}" method="POST">
    @csrf
    @method('DELETE')

    <input class="btn btn-primary mb-2" type="submit" value="Sim">

    <a class="btn btn-danger mb-2" href="/clientes">Não</a>

</form>
</div>
</div>
</div>
@stop

@section('css')

@stop

@section('js')

@stop
