<?php
require_once '../Modelo/Docentes.php';
$ModeloDocentes = new Docentes();
if ($_POST) {
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Usuario = $_POST['Usuario'];
    $Password = $_POST['Password'];
    $ModeloDocentes->add($Nombre, $Apellido, $Usuario, $Password);
    header('Location: ../Pages/index.php');
} else {
    header('Location: ../Pages/add.php');
}
