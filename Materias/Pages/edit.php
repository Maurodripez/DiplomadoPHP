<?php
require_once '../../Usuarios/Modelo/Usuarios.php';
$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();
$Id = $_GET['Id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistema de Notas</title>
</head>

<body>
    <h1>Editar Materias</h1>
    <form method="POST" action="../Controladores/edit.php">
        <input type="hidden" name="Id" value="<?php echo $Id ?>">
        Nombre <br>
        <input type="text" name="Materia" required="" placeholder="Nombre Materia" autocomplete="off"<br><br>
        <input type="submit" value="Editar Materia">
    </form>
</body>

</html>