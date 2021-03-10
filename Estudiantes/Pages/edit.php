<?php
require_once '../../Usuarios/Modelo/Usuarios.php';
$Modelo = new Usuarios();
$Modelo->validateSession();
require_once '../Modelo/Estudiantes.php';
$ModeloEstudiantes = new Estudiantes();
require_once '../../Metodos.php';
$ModeloMetodos = new Metodos();
$Id = $_GET['Id'];
$InformacionEstudiante = $ModeloEstudiantes->getById($Id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistema de Notas</title>
</head>

<body>
    <h1>Editar Estudiante</h1>
    <form method="POST" action="../Controladores/edit.php">
        <input type="hidden" name="Id" value="<?php echo $Id; ?>">
        <?php
        if ($InformacionEstudiante != null) {
            foreach ($InformacionEstudiante as $Info) {
        ?>
        Nombre <br><br>
        <input type="text" name="Nombre" placeholder="Nombre" required="" autocomplete="off"
            value="<?php echo $Info['NOMBRE'] ?>"><br>
        Apellido <br><br>
        <input type="text" name="Apellido" placeholder="Apellido" required="" autocomplete="off"
            value="<?php echo $Info['APELLIDO'] ?>"><br>
        Documento <br><br>
        <input type="text" name="Documento" placeholder="Documento" required="" autocomplete="off"
            value="<?php echo $Info['DOCUMENTO'] ?>"><br>
        Correo <br><br>
        <input type="email" name="Correo" placeholder="Correo" required="" autocomplete="off"
            value="<?php echo $Info['CORREO'] ?>"><br>
        Materia <br><br>
        <select name="Materia" required="">
            <option value="<?php echo $Info['MATERIA'] ?>"><?php echo $Info['MATERIA'] ?></option>
            <?php
                    $Materias = $ModeloMetodos->getMaterias();
                    if ($Materias != null) {
                        foreach ($Materias as $Materia) {
                    ?>
            <?php
                            if ($Info['MATERIA'] != $Materia['MATERIA']) {
                            ?>
            <option value="<?php echo $Materia['MATERIA'] ?>"><?php echo $Materia['MATERIA'] ?></option>
            <?php
                            }
                        }
                    }
                    ?>
        </select><br><br>
        Docentes <br>
        <select name="Docente" required="">
            <option value="<?php echo $Info['DOCENTE'] ?>"><?php echo $Info['DOCENTE'] ?></option>
            <?php
                    $Docentes = $ModeloMetodos->getDocentes();
                    if ($Docentes != null) {
                        foreach ($Docentes as $Docente) {
                    ?>
                    <option value="<?php echo $Docente['NOMBRE'] . ' ' . $Docente['APELLIDO'] ?>">
                        <?php echo $Docente['NOMBRE'] . ' ' . $Docente['APELLIDO'] ?></option>
            <?php
                        }
                    } ?>
        </select><br><br>
        Promedio <br>
        <input type="number" name="Promedio" required="" autocomplete="off" placeholder="Promedio"
            value="<?php echo $Info['PROMEDIO'] ?>"><br><br>
        <?php
            }
        }
        ?>
        <input type="submit" value="Editar Estudiante">
    </form>
</body>

</html>