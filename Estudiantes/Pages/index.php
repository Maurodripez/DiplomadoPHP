<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistema de Notas</title>
</head>

<body>
    <h1>Estudiantes</h1>
    <a href="add.php" target="_blank">Registrar Estudiante</a><br>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Documento</th>
            <th>Correo</th>
            <th>Materia</th>
            <th>Docente</th>
            <th>Promedio</th>
            <th>Fecha de Registro</th>
            <th>Acciones</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Diego</td>
            <td>Palacios</td>
            <td>123212</td>
            <td>diego@gmail.com</td>
            <td>Matematicas</td>
            <td>Pedro Hernandez</td>
            <td>95</td>
            <td>2021/02/22</td>
            <td>
                <a href="edit.php" target="_blank">Editar</a>
                <a href="delete.php" target="_blank">Eliminar</a>
            </td>
        </tr>
    </table>
</body>

</html>