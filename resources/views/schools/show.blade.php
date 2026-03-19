@extends('layouts.admin')

@section('content')

    <h2>Detalhes da escola</h2>

    <x-alert/>

    <a href="{{ route('schools.index') }}">Listar</a><br>
    <a href="{{ route('schools.edit', ['school' => $school->id]) }}">Editar</a><br><br>

        {{-- Imprimir o registro --}}

        ID: {{ $school->id }}<br>
        Nome: {{ $school->name }}<br>
        Cadastrado: {{ \Carbon\Carbon::parse($school->created_at)->format('d/m/Y H:i:s') }}<br>
        Editado: {{ \Carbon\Carbon::parse($school->updated_at)->format('d/m/Y H:i:s') }}<br>

@endsection