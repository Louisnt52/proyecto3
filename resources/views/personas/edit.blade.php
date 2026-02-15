<h2>Editar Persona</h2>

<form action="{{ route('personas.update', $persona->id) }}" method="POST">
    @csrf
    @method('PUT')

    DNI: <input type="text" name="dni" value="{{ $persona->dni }}"><br>
    Paterno: <input type="text" name="paterno" value="{{ $persona->paterno }}"><br>
    Materno: <input type="text" name="materno" value="{{ $persona->materno }}"><br>
    Nombre: <input type="text" name="nombre" value="{{ $persona->nombre }}"><br>
    Email: <input type="email" name="email" value="{{ $persona->email }}"><br>

    <button type="submit">Actualizar</button>
</form>
