<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistema de Notas</title>
</head>

<body>
    <h1>Editar Administrador</h1>
    <form action="POST" action="../Controladores/edit.php">
        <input type="hidden" name="Id" value="">
        Nombre <br>
        <input type="text" name="Nombre" placeholder="Nombre" autocomplete="off" required=""><br>
        Apellido <br>
        <input type="text" name="Apellido" placeholder="Apellido" autocomplete="off" required=""><br>
        Usuario <br>
        <input type="text" name="Usuario" placeholder="Usuario" autocomplete="off" required=""><br>
        Password <br>
        <input type="password" name="Password" placeholder="Password" autocomplete="off" required=""><br><br>
        Estado <br>
        <select name="Estado" required="">
            <option>Selecciona</option>
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
        </select><br><br>
        <input type="submit" value="Editar Administrador">
    </form>
</body>

</html>