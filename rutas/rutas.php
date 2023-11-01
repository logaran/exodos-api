<?php

$arrayRutas = explode("/", $_SERVER['REQUEST_URI']);

if (count(array_filter($arrayRutas)) == 1) {
    $json = array(
        "detalle" => "No encontrado"
    );
    echo json_encode($json, true);
    return;
} else {
    $endPoint = array_filter($arrayRutas)[2];

    switch ($endPoint) {
        case "juego":
            $juegos = new Controlador_Juegos;
            $juegos->index();
            break;
        case "compania":
            $companias = new Controlador_Companias;
            $companias->index();
            break;
        case "anio":
            $anios = new Controlador_Anios;
            $anios->index();
            break;
    }
    return;
}
