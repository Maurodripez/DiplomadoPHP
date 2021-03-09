<?php
require_once '../../Usuarios/Modelo/Usuarios.php';
require_once '../Modelo/Materias.php';
$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();
$ModeloMaterias = new Materias();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistema de Notas</title>
</head>

<body>
    <h1>Materias</h1>
    <a href="add.php">Registrar Materias</a><br>
    <table border="2">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
        <?php
        $Materias = $ModeloMaterias->get();
        if ($Materias !== null) {
            foreach ($Materias as $Materia) {
        ?>
                <tr>
                    <td><?php echo $Materia['ID_MATERIA'] ?></td>
                    <td><?php echo $Materia['MATERIA'] ?></td>
                    <td>
                        <a href="edit.php?Id=<?php echo $Materia['ID_MATERIA'] ?>" target="_blank">Editar</a>
                        <a href="delete.php?Id=<?php echo $Materia['ID_MATERIA'] ?>" target="_blank">Eliminar</a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
</body>

</html>