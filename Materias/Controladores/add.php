<?php
require_once '../Modelo/Materias.php';
$ModeloMaterias = new Materias();
if ($_POST) {
    $ModeloMaterias = new Materias();
    $Materia = $_POST['Materia'];
    $ModeloMaterias->add($Materia);
}
