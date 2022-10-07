index de las vistas

<table class="table table-dark">
    <thead class="thead-light">

        <tr>
             <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>

    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{ $empleado->id }}</td>
            <td>{{ $empleado->Foto }}</td>
            <td>{{ $empleado->Nombre }}</td>
            <td>{{ $empleado->ApellidoPaterno }}</td>
            <td>{{ $empleado->ApellidoMaterno }}</td>
            <td>{{ $empleado->Correo }}</td>
            <td>
                <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}">Editar</a>
                <!-- <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}">New</a>  -->
                |      
            </td>
            <td>
            <form action=" {{ url('/empleado/'.$empleado->id) }}" method="post">
                    @csrf <!-- LLAVE PARA EL CONTROL DE INSERSIONES -->
                    <!--PARA QUE ACEPTE EL BORRADO, LA URL -->
                    {{ method_field('DELETE') }} 
                    <input type="submit" onclick="return confirm('¿BORRAR?');"value="Borrar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
