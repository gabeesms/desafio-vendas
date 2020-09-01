    @extends('adminlte::page')

    @section('title', 'Fabricantes')

    @section('content_header')
    <div class="card">
        <div class="card-body">
        <h1>Fabricantes</h1>
        </div>
    </div>
    @stop

    @section('content')
    <div class="card">
        <div class="card-body">
        <a href="{{ route('fabricantes.create') }}" class="btn btn-primary">Cadastrar Novo</a>
        <table class="table table-bordered">
            <tr>
                <th>Nome</th>
                <th>Site</th>
                <th>Ações</th>
            </tr>

            @foreach ($fabricantes as $f)
                <tr>
                    <td>{{ $f->nome}}</td>
                    <td>{{ $f->site}}</td>
                    <td>
                        <a href="/fabricantes/{{ $f->id }}/edit">Editar</a>
                        <a href="/fabricantes/{{ $f->id }}">Excluir</a>
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
