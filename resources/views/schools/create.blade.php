@extends('layouts.admin')

@section('content')

    <h2>Cadastrar Escola</h2>

    <x-alert/>
    
    <a href="{{ route('schools.index') }}">Listar</a><br><br>

    <form action="{{ route('schools.store') }}" method="POST">
        @csrf
        @method('POST')   

        <label>Nome:</label>
        <input type="text" name="name" id="name" placeholder="Informe o nome da escola" value="{{ old('name') }}" required>
        <br><br>
    
        <button type="submit">Cadastrar</button>
    </form>
    
@endsection
