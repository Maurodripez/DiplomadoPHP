<?php
require_once '../../Usuarios/Modelo/Usuarios.php';
require_once '../../Metodos.php';
$Metodos = new Metodos();
$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistema de Notas</title>
</head>

<body>
    <h1>Registrar Estudiante</h1>
    <form method="POST" action="../Controladores/add.php">
        Nombre <br>
        <input type="text" name="Nombre" placeholder="Nombre" required="" autocomplete="off"><br>
        Apellido <br>
        <input type="text" name="Apellido" placeholder="Apellido" required="" autocomplete="off"><br>
        Documento <br>
        <input type="text" name="Documento" placeholder="Documento" required="" autocomplete="off"><br>
        Correo <br>
        <input type="email" name="Correo" placeholder="Correo" required="" autocomplete="off"><br>
        Materia <br>
        <select name="Materia" required="">
            <option>Seleccione</option>
            <?php
            $Materias = $Metodos->getMaterias();
            if ($Materias != null) {
                foreach ($Materias as $Materia) {
            ?>
                    <option value="<?php echo $Materia['MATERIA'] ?>"><?php echo $Materia['MATERIA'] ?></option>
            <?php
                }
            }
            ?>
        </select><br><br>
        Docentes <br>
        <select name="Docente" required="">
            <option>Seleccione</option>
            <?php
            $Docentes = $Metodos->getDocentes();
            if ($Docentes != null) {
                foreach ($Docentes as $Docente) {
            ?>
                    <option value="<?php echo $Docente['NOMBRE'] . ' ' . $Docente['APELLIDO'] ?>">
                        <?php echo $Docente['NOMBRE'] . ' ' . $Docente['APELLIDO'] ?></option>
            <?php
                }
            }
            ?>
        </select><br><br>
        Promedio <br>
        <input type="number" name="Promedio" required="" autocomplete="off" placeholder="Promedio"><br><br>
        <input type="submit" value="Registrar Estudiante">
    </form>
</body>

</html>