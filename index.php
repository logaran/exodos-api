
<?php

require_once "./controlador/rutas.controlador.php";
require_once "./controlador/anios.controlador.php";
require_once "./controlador/juegos.controlador.php";
require_once "./controlador/companias.controlador.php";


$rutas = new ControladorRutas();
$rutas->inicio();

?>