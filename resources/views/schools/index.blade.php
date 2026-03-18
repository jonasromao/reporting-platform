@extends('layouts.admin')

@section('content')

    <h2>Listar as Escolas</h2>

    <x-alert/>

    <a href="{{ route('schools.create') }}">Cadastrar</a><br><br>

    {{-- Imprimir os registro --}}
    
    @forelse ($schools as $school)
        ID: {{ $school->id }}<br>
        Nome: {{ $school->name }}<br>
        <a href="{{ route('schools.show', ['school' => $school->id]) }}">Visualizar</a>
        <hr>
    @empty
        Nenhum registro encontrado!
    @endforelse


@endsection