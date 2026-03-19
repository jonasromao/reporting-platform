@extends('layouts.admin')

@section('content')

    <h2>Cadastrar Escola</h2>

    
    <a href="{{ route('schools.index') }}">Listar</a><br><br>

    <form action="{{ route('schools.store') }}" method="POST">
        @csrf
        @method('POST')   

        <label>Nome:</label>
        <input type="text" name="name" id="name" placeholder="Informe o nome da escola" required>
        <br><br>
    
        <button type="submit">Cadastrar</button>
    </form>
    
@endsection
