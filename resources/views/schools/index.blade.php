@extends('layouts.admin')

@section('content')

    <h2>Listar as Escolas</h2>

    <x-alert/>

    <a href="{{ route('schools.create') }}">Cadastrar</a><br><br>

    @forelse ($schools as $school)
        ID: {{ $school->id }}<br>
        Nome: {{ $school->name }}
        <hr>
    @empty
        
    @endforelse


@endsection