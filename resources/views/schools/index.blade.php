@extends('layouts.admin')

@section('content')

    <h2>Listar as Escolas</h2>

    <x-alert/>

    <a href="{{ route('schools.create') }}">Cadastrar</a><br><br>

    {{-- Imprimir os registro --}}
    
    @forelse ($schools as $school)
        ID: {{ $school->id }}<br>
        Nome: {{ $school->name }}<br>
        <a href="{{ route('schools.show', ['school' => $school->id]) }}">Visualizar</a><br>
        <a href="{{ route('schools.edit', ['school' => $school->id]) }}">Editar</a><br>

        <form action="{{ route('schools.destroy', ['school' => $school->id]) }}" method="POST">
            @csrf
            @method('delete')

            <button type="submit" onclick="return confirm('Deseja apagar este registro?')">Apagar</button>
        </form>

        <hr>
    @empty
        Nenhum registro encontrado!
    @endforelse


@endsection