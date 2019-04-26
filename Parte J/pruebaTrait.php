<?php

echo '<pre>';
require_once ('clases/Alumno.php');
use MiApp\Alumno as Nuevo;
$alumno = new Nuevo('Gonzalo', 'Zevallos', 1020);
$alumno->tomarAsistencia();
var_dump($alumno);

 ?>
