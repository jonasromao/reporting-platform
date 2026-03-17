@extends('layouts.admin')

@section('content')
    <h2>Listar as Escolas</h2>

    <x-alert/>

    <a href="{{ route('schools.create') }}">Cadastrar</a>
@endsection