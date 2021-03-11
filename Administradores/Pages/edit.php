<?php
require_once '../Modelo/Administradores.php';
$ModeloAdministradores = new Administradores();
$Id = $_GET['Id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistema de Notas</title>
</head>

<body>
    <h1>Editar Administrador</h1>
    <form method="POST" action="../Controladores/edit.php">
        <?php
        $Administradores = $ModeloAdministradores->getbyId($Id);
        if ($Administradores !== null) {
            foreach ($Administradores as $Administrador) {
        ?>
        <input type="hidden" name="Id" value="<?php echo $Id ?>">
        Nombre <br>
        <input type="text" name="Nombre" placeholder="Nombre" autocomplete="off" required=""
            value="<?php echo $Administrador['NOMBRE']; ?>"><br>
        Apellido <br>
        <input type="text" name="Apellido" placeholder="Apellido" autocomplete="off" required=""
            value="<?php echo $Administrador['APELLIDO']; ?>"><br>
        Usuario <br>
        <input type="text" name="Usuario" placeholder="Usuario" autocomplete="off" required=""
            value="<?php echo $Administrador['USUARIO']; ?>"><br>
        Password <br>
        <input type="password" name="Password" placeholder="Password" autocomplete="off" required=""
            value="<?php echo $Administrador['PASSWORD']; ?>"><br><br>
        Estado <br>
        <select name="Estado" required="">
            <option value="<?php echo $Administrador['ESTADO']; ?>"><?php echo $Administrador['ESTADO']; ?></option>
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
        </select><br><br>
        <input type="submit" value="Editar Administrador">
        <?php
            }
        }
        ?>
    </form>
</body>

</html>