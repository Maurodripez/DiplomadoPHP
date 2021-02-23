<!DOCTYPE html>
<html>
<title>Proyecto</title>

<head>
    <h1>Inicio de sesion</h1>
    <form method="POST" action="Usuarios/Controladores/Login.php">
        Usuario<br>
        <input type="text" name="Usuario" required="" autocomplete="off" placeholder="Usuario"><br><br>
        Contrasena<br>
        <input type="password" name="Contrasena" required="" autocomplete="off" placeholder="Contrasena"><br><br>
        <input type="submit" value="Iniciar sesion">
    </form>
</head>

</html>