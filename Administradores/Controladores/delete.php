<?php
require_once '../Modelo/Administradores.php';
$ModeloAdministradores = new Administradores();
if($_POST){
$Id = $_POST['Id'];
$ModeloAdministradores->delete($Id);
}
?>