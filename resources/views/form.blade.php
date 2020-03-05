<form action="/guarda" method="post">
<!-- Llave APP_KEY de seguridad -->
@csrf 
    <label for="">Nombre</label>
    <input type="text" name="Nombre">
    <label for="">Apellido Paterno</label>
    <input type="text" name="ApPaterno">
    <label for="">Apellido Materno</label>
    <input type="text" name="ApMaterno">
    <label for="">Clave</label>
    <input type="number" name="Clave">

    <input type="submit">
</form>