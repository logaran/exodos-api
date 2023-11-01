<?php

class Controlador_Companias {
    public function index() { 
        $json = array(
            "detalle"=> "Estas en la carpeta Compañias"
        );
        echo json_encode($json, true);
        return;
    }
}
