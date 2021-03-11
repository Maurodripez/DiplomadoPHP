<?php
require_once '../../Usuarios/Modelo/Usuarios.php';
$Metodos = new Usuarios();
$Metodos->validateSession();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistema de Notas</title>
</head>

<body>
    <h1>Registrar Administrador</h1>
    <form method="POST" action="../Controladores/add.php">
        Nombre <br>
        <input type="text" name="Nombre" placeholder="Nombre" autocomplete="off" required=""><br>
        Apellido <br>
        <input type="text" name="Apellido" placeholder="Apellido" autocomplete="off" required=""><br>
        Usuario <br>
        <input type="text" name="Usuario" placeholder="Usuario" autocomplete="off" required=""><br>
        Password <br>
        <input type="password" name="Password" placeholder="Password" autocomplete="off" required=""><br><br>
        <input type="submit" value="Registrar Administrador">
    </form>
</body>

</html>