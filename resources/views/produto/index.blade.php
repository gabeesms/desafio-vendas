@extends('adminlte::page')

@section('title', 'Produtos')

@section('content_header')
<div class="card">
    <div class="card-body">
    <h1>Produtos</h1>
    </div>
</div>
@stop

@section('content')
<div class="card">
    <div class="card-body">
    <a href="{{ route('produtos.create') }}" class="btn btn-primary">Cadastrar Novo</a>
    <table class="table table-bordered">
        <tr>
            <th>Descrição</th>
            <th>Estoque</th>
            <th>Preço</th>
            <th>Fabricante</th>
            <th>Ações</th>
        </tr>

        @foreach ($produtos as $p)
            <tr>
                <td>{{ $p->descricao}}</td>
                <td>{{ $p->estoque}}</td>
                <td>{{ $p->preco}}</td>
                <td>{{ $p->fabricante_id}}</td>
                <td>
                    <a href="/produtos/{{ $p->id }}/edit">Editar</a>
                    <a href="/produtos/{{ $p->id }}">Excluir</a>
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
