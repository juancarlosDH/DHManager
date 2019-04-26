<!DOCTYPE html>
<?php
if ($_POST) {
    require_once ('clases/Alumno.php');
    $alumno = new MiApp\Alumno($_POST['nombre'],$_POST['apellido'],$_POST['codigoAlumno']);
    echo '<pre>';
    var_dump($alumno);
}
 ?>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form class="" action="" method="post">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="" id="nombre">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" value="" id="apellido">
            <label for="codigoAlumno">Codigo Alumno</label>
            <input type="text" name="codigoAlumno" value="" id="codigoAlumno">
            <button type="submit" name="button">Enviar</button>
        </form>
    </body>
</html>
