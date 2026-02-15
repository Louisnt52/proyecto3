<h2>Registrar Persona</h2>

<form action="{{ route('personas.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    DNI: <input type="text" name="dni"><br><br>

    Paterno: <input type="text" name="paterno"><br><br>

    Materno: <input type="text" name="materno"><br><br>

    Nombre: <input type="text" name="nombre"><br><br>

    Nombre Corto: <input type="text" name="nombre_corto"><br><br>

    Website: <input type="text" name="Website"><br><br>

    Twitter: <input type="text" name="Twitter"><br><br>

    Fecha de Nacimiento: 
    <input type="date" name="fecha_nacimiento"><br><br>

    Dirección: <input type="text" name="direccion"><br><br>

    Teléfono Celular: 
    <input type="text" name="telefono_celular"><br><br>

    Teléfono Fijo: 
    <input type="text" name="telefono_fijo"><br><br>

    Zona: <input type="text" name="zona"><br><br>

    Email: <input type="email" name="email"><br><br>

    Fotografía: 
    <input type="file" name="fotografia"><br><br>

    Estado:
    <select name="estado">
        <option value="1">Activo</option>
        <option value="0">Inactivo</option>
    </select><br><br>

    <button type="submit">Guardar</button>
</form>

