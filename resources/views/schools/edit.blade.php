@extends('layouts.admin')

@section('content')

    <h2>Editar Escola</h2>

    <x-alert/>

    <a href="{{ route('schools.index') }}">Listar</a><br>
    <a href="{{ route('schools.show', ['school' => $school->id]) }}">Visualizar</a><br><br>

    <form action="{{ route('schools.update', ['school' => $school->id]) }}" method="POST">
        @csrf
        @method('PUT')   

        <label>Nome:</label>
        <input type="text" name="name" id="name" placeholder="Informe o nome da escola" value="{{ old('name', $school->name) }}" required>
        <br><br>
    
        <button type="submit">Salvar</button>
    </form>
    
@endsection