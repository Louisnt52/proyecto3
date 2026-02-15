<h2>Lista de Personas</h2>

<a href="{{ route('personas.create') }}">Nueva Persona</a>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1">
    <tr>
        <th>ID</th>
        <th>DNI</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Acciones</th>
    </tr>

    @foreach($personas as $persona)
    <tr>
        <td>{{ $persona->id }}</td>
        <td>{{ $persona->dni }}</td>
        <td>{{ $persona->paterno }} {{ $persona->materno }} {{ $persona->nombre }}</td>
        <td>{{ $persona->email }}</td>
        <td>
            <a href="{{ route('personas.edit', $persona->id) }}">Editar</a>

            <form action="{{ route('personas.destroy', $persona->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
