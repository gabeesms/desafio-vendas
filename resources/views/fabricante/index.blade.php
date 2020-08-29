@extends('adminlte::page')

@section('title', 'Fabricantes')

@section('content_header')
    <h1>Fabricantes</h1>
@stop

@section('content')
    <a href="{{ route('fabricantes.create') }}" class="btn btn-primary">Cadastrar Novo</a>
@stop

@section('css')
  
@stop

@section('js')

@stop