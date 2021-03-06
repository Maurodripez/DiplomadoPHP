<?php
require_once '../../Usuarios/Modelo/Usuarios.php';
require_once '../Modelo/Docentes.php';
$Metodos = new Usuarios();
$Metodos->validateSession();
$ModeloDocentes = new Docentes();
$Id = $_GET['Id'];
$InfoDocentes = $ModeloDocentes->getbyId($Id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistema de Notas</title>
</head>

<body>
    <h1>Editar Docente</h1>
    <form method="POST" action="../Controladores/edit.php">
        <?php
        if ($InfoDocentes != null) {
            foreach ($InfoDocentes as $Info) {
        ?>
        <input type="hidden" name="Id" value="<?php echo $Id; ?>">
        Nombre <br>
        <input type="text" name="Nombre" placeholder="Nombre" autocomplete="off" required=""
            value="<?php echo $Info['NOMBRE']; ?>"><br>
        Apellido <br>
        <input type="text" name="Apellido" placeholder="Apellido" autocomplete="off" required=""
            value="<?php echo $Info['APELLIDO']; ?>"><br>
        Usuario <br>
        <input type="text" name="Usuario" placeholder="Usuario" autocomplete="off" required=""
            value="<?php echo $Info['USUARIO']; ?>"><br>
        Password <br>
        <input type="password" name="Password" placeholder="Password" autocomplete="off" required=""
            value="<?php echo $Info['PASSWORD']; ?>"><br><br>
        Estado <br>
        <select name="Estado" required="">
            <option value="<?php echo $Info['ESTADO'] ?>"><?php echo $Info['ESTADO'] ?></option>
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
        </select><br><br>
        <?php
            }
        } ?>
        <input type="submit" value="Editar Docente">
    </form>
</body>

</html>