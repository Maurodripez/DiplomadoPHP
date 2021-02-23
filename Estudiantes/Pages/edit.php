<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistema de Notas</title>
</head>

<body>
    <h1>Registrar Estudiante</h1>
    <form method="POST" action="../Controladores/adit.php">
    <input type="hidden" name="Id" value="">
        Nombre <br><br>
        <input type="text" name="Nombre" placeholder="Nombre" required="" autocomplete="off"><br>
        Apellido <br><br>
        <input type="text" name="Apellido" placeholder="Apellido" required="" autocomplete="off"><br>
        Documento <br><br>
        <input type="text" name="Documento" placeholder="Documento" required="" autocomplete="off"><br>
        Correo <br><br>
        <input type="email" name="Correo" placeholder="Correo" required="" autocomplete="off"><br>
        Materia <br><br>
        <select name="Materia" required="">
            <option>Seleccione</option>
            <option value="Ingles">Ingles</option>
            <option value="Matematicas">Matematicas</option>
            <option value="Ciencias">Ciencias</option>
        </select><br><br>
        Docentes <br>
        <select name="Docentes" required="">
            <option>Seleccione</option>
            <option>Pedro</option>
            <option>Juan</option>
            <option>Luz</option>
        </select><br><br>
        Promedio <br>
        <input type="number" name="Promedio" required="" autocomplete="off" placeholder="Promedio"><br><br>
        <input type="submit" value="Editar Estudiante">
    </form>
</body>

</html>