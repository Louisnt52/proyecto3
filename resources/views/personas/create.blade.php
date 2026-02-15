<h2>Registrar Persona</h2>

<form action="{{ route('personas.store') }}" method="POST">
    @csrf
    DNI: <input type="text" name="dni"><br>
    Paterno: <input type="text" name="paterno"><br>
    Materno: <input type="text" name="materno"><br>
    Nombre: <input type="text" name="nombre"><br>
    Email: <input type="email" name="email"><br>

    <button type="submit">Guardar</button>
</form>
