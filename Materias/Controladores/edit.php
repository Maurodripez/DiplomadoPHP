<?php
include_once '../Modelo/Materias.php';
echo $_POST['Materia'];
if ($_POST) {
    $Modelo = new Materias();
    $Id = $_POST['Id'];
    $Materia = $_POST['Materia'];
    $Modelo->update($Id, $Materia);
} else {
    header('Location: ../../index.php');
}
