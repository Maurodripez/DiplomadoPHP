<?php
require_once '../Modelo/Administradores.php';
$ModeloAdministradores = new Administradores();
if ($_POST) {
    $Id = $_POST['Id'];
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Usuario = $_POST['Usuario'];
    $Password = $_POST['Password'];
    $Estado = $_POST['Estado'];
    $ModeloAdministradores->update($Id, $Nombre, $Apellido, $Usuario, $Password, $Estado);
}
