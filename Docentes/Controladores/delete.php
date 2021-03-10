<?php
require_once '../Modelo/Docentes.php';
$Docentes = new Docentes();
if ($_POST) {
    $Id = $_POST['Id'];
    $Docentes->delete($Id);
}
