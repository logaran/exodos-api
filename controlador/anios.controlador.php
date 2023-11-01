<?php

class Controlador_Anios {
    public function index() { 
        $json = array(
            "detalle"=> "Estas en la carpeta Años"
        );
        echo json_encode($json, true);
        return;
    }
}
