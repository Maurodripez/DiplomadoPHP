<?php
require_once '../Modelo/Administradores.php';
$ModeloAdministradores = new Administradores();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistema de Notas</title>
</head>

<body>
    <h1>Administradores</h1>
    <a href="add.php" target="_blank">Registrar Administrador</a><br>
    <table border="2">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Usuario</th>
            <th>Perfil</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
        <?php
        $Administradores = $ModeloAdministradores->get();
        if ($Administradores !== null) {
            foreach ($Administradores as $Administrador) {
        ?>
                <tr>
                    <td><?php echo $Administrador['ID_USUARIO'] ?></td>
                    <td><?php echo $Administrador['NOMBRE'] ?></td>
                    <td><?php echo $Administrador['APELLIDO'] ?></td>
                    <td><?php echo $Administrador['USUARIO'] ?></td>
                    <td><?php echo $Administrador['PERFIL'] ?></td>
                    <td><?php echo $Administrador['ESTADO'] ?></td>
                    <td>
                        <a href="edit.php?Id=<?php echo $Administrador['ID_USUARIO'] ?>" target="_blank">Editar</a>
                        <a href="delete.php?Id=<?php echo $Administrador['ID_USUARIO'] ?>" target="_blank">Eliminar</a>
                    </td>
            <?php
            }
        }
            ?>
                </tr>
    </table>
</body>

</html>