<h2>Editar Persona</h2>

<form action="{{ route('personas.update', $persona->id) }}" method="POST">
    @csrf
    @method('PUT')

    DNI:
    <input type="text" name="dni" value="{{ $persona->dni }}"><br><br>

    Paterno:
    <input type="text" name="paterno" value="{{ $persona->paterno }}"><br><br>

    Materno:
    <input type="text" name="materno" value="{{ $persona->materno }}"><br><br>

    Nombre:
    <input type="text" name="nombre" value="{{ $persona->nombre }}"><br><br>

    Nombre Corto:
    <input type="text" name="nombre_corto" value="{{ $persona->nombre_corto }}"><br><br>

    Website:
    <input type="text" name="Website" value="{{ $persona->Website }}"><br><br>

    Twitter:
    <input type="text" name="Twitter" value="{{ $persona->Twitter }}"><br><br>

    Fecha de Nacimiento:
    <input type="date" name="fecha_nacimiento" value="{{ $persona->fecha_nacimiento }}"><br><br>

    Dirección:
    <input type="text" name="direccion" value="{{ $persona->direccion }}"><br><br>

    Teléfono Celular:
    <input type="text" name="telefono_celular" value="{{ $persona->telefono_celular }}"><br><br>

    Teléfono Fijo:
    <input type="text" name="telefono_fijo" value="{{ $persona->telefono_fijo }}"><br><br>

    Zona:
    <input type="text" name="zona" value="{{ $persona->zona }}"><br><br>

    Email:
    <input type="email" name="email" value="{{ $persona->email }}"><br><br>

    Fotografía actual:
    @if($persona->fotografia)
        <br>
        <img src="{{ asset('imagenes/'.$persona->fotografia) }}" width="100"><br><br>
    @endif

    Cambiar Fotografía:
    <input type="file" name="fotografia"><br><br>

    Estado:
    <select name="estado">
        <option value="1" {{ $persona->estado == '1' ? 'selected' : '' }}>Activo</option>
        <option value="0" {{ $persona->estado == '0' ? 'selected' : '' }}>Inactivo</option>
    </select><br><br>

    <button type="submit">Actualizar</button>
</form>
