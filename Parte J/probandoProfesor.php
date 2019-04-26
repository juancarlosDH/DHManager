<?php
echo '<pre>';
require_once('clases/Profesor.php');
require_once('clases/ProfesorTitular.php');

$profe = new MiApp\ProfesorTitular('Pepe', 'Perez', 0, 1000, 'JS');

echo($profe->getNombreCompleto());

 ?>
