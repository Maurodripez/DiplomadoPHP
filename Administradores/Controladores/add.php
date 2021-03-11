<?php
require_once '../Modelo/Administradores.php';
$ModeloAdministradores = new Administradores();
if ($_POST) {
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Usuario = $_POST['Usuario'];
    $Password = $_POST['Password'];
    $ModeloAdministradores->add($Nombre, $Apellido, $Usuario, $Password);
}
