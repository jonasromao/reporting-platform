<div>
    <h2>Cadastrar Escola</h2>

    <form action="{{ route('schools.store') }}" method="POST">
        @csrf
        @method('POST')   

        <label>Nome:</label>
        <input type="text" name="name" id="name" placeholder="Informe o nome da escola" required>
        <br><br>
    
        <button type="submit">Cadastrar</button>
    </form>
</div>
