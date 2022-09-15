Vista para crear el empleado

<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
<!-- identificador, llave de seguridad -->
@csrf
<!--  -->
@include('empleado.form');

</form>

