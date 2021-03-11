<?php
require_once '../../Usuarios/Modelo/Usuarios.php';
$Metodos = new Usuarios();
$Metodos->validateSession();
require_once '../Modelo/Docentes.php';
$ModeloDocentes = new Docentes();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistema de Notas</title>
</head>

<body>
    <h1>Docentes</h1>
    <a href="add.php" target="_blank">Registrar Docentes</a><br>
    <table border="2">
        <th>Id</th>
        <th>Nombre</th>
        <th>Usuario</th>
        <th>Perfil</th>
        <th>Estado</th>
        <th>Acciones</th>
        </tr>
        <?php
        $Docentes = $ModeloDocentes->get();
        if ($Docentes != null) {
            foreach ($Docentes as $Docente) {
        ?>
                <tr>
                    <td><?php echo $Docente['ID_USUARIO'] ?></td>
                    <td><?php echo $Docente['NOMBRE'] . ' ' . $Docente['APELLIDO'] ?></td>
                    <td><?php echo $Docente['USUARIO'] ?></td>
                    <td><?php echo $Docente['PERFIL'] ?></td>
                    <td><?php echo $Docente['ESTADO'] ?></td>
                    <td>
                        <a href="edit.php?Id=<?php echo $Docente['ID_USUARIO'] ?>" target="_blank">Editar</a>
                        <a href="delete.php?Id=<?php echo $Docente['ID_USUARIO'] ?>" target="_blank">Eliminar</a>
                    </td>
            <?php
            }
        } 
        ?>
                </tr>
    </table>
</body>

</html>