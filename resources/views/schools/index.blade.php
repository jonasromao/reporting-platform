<div>
    <h2>Listar as Escolas</h2>

    @if(session('success'))
        <p style="color: #082">
            {{ session('success') }}
        </p>
    @endif

    <a href="{{ route('schools.create') }}">Cadastrar</a>
</div>