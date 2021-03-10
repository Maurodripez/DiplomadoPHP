<?php
require_once '../../Conexion.php';
class Docentes extends Conexion
{
    public function __construct()
    {
        $this->db = parent::__construct();
    }
    public function add($Nombre, $Apellido, $Usuario, $Password)
    {
        $statement = $this->db->prepare("INSERT INTO usuarios(NOMBRE,APELLIDO,USUARIO,PASSWORD,ESTADO)
    VALUES(:Nombre,:Apellido,:Usuario,:Password,'Docente','Activo')");
        $statement->bindPAram(':Nombre', $Nombre);
        $statement->bindPAram(':Apellido', $Apellido);
        $statement->bindPAram(':Usuario', $Usuario);
        $statement->bindPAram(':Password', $Password);
        if ($statement->execute()) {
            header('Location: ../Pages/index.php');
        } else {
            header('Location: ../Pages/add.php');
        }
    }
    public function get()
    {
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM usuarios WHERE PERFIL='Docente'");
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
    }
    public function getById($Id)
    {
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM usuarios WHERE Perfil='Docente' AND ID_USUARIO = :Id");
        $statement->bindParam('Id', $Id);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
    }
    public function update($Id, $Nombre, $Apellido, $Usuario, $Password, $Perfil, $Estado)
    {
        $statement = $this->db->prepare("UPDATE usuarios SET NOMBRE = :Nombre, APELLIDO=:Apellido,USUARIO=Usuario,
        PASSWORD=:Password,PERFIL=:Perfil,ESTADO=:Estado WHERE ID_USUARIO=:Id");
        $statement->bindParam(':Id', $Id);
        $statement->bindParam(':Nombre', $Nombre);
        $statement->bindParam(':Apellido', $Apellido);
        $statement->bindParam(':Usuario', $Usuario);
        $statement->bindParam(':Password', $Password);
        $statement->bindParam(':Perfil', $Perfil);
        $statement->bindParam(':Estado', $Estado);
        if ($statement->execute()) {
            header('Location: ../Pages/index.php');
        } else {
            header('Location: ../Pages/edit.php');
        }
    }
    public function delete($Id)
    {
        $statement = $this->db->prepare("DELETE FROM usuarios WHERE ID_USUARIO = :Id");
        $statement->bindParam('Id', $Id);
        if ($statement->execute()) {
            header('Location: ../Pages/index.php');
        } else {
            header('Location: ../Pages/delete.php');
        }
    }
}