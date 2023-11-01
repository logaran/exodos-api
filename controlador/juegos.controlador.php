<?php

class Controlador_Juegos {
    public function index() { 
        $json = array(
            "detalle" => "Estas en la carpeta Juegos"
        );
        
        echo json_encode($json, true);
        
        return;
    }
}
