formulario para los empleados

<br>
    <label for="Nombre">Nombre:</label>
     <input type="text" name="Nombre" value="{{$empleado->Nombre}}" > 
    <br>
    <label for="ApellidoPaterno">Apellido Paterno:</label>
    <input type="text" name="ApellidoPaterno" value="{{$empleado->ApellidoPaterno}}" >
    <br>
    <label for="ApellidoMaterno">Apellido Materno:</label>
    <input type="text" name="ApellidoMaterno" value="{{$empleado->ApellidoMaterno}}" >
    <br>
    <label for="Correo">Correo:</label>
    <input type="text" name="Correo" value="{{$empleado->Correo}}" >
    <br>
    <label for="Foto">Foto:</label>
    {{$empleado->Foto}}
    <input type="file" name="Foto" value="">
    <br>
    <label for="Enviar">Enviar:</label>
    <input type="submit" value="Guardar datos">