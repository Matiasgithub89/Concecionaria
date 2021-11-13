<?php

class RutasControlador{//creamos la clase como la llamamos en nuestro index
    public function Plantilla(){// como la llamamos en nuestro index
        include "vista/plantilla.php";
        
    }

    public function Rutas(){

        if(isset($_GET["rutas"])){
            $rutas = $_GET["rutas"];//guardamos en la variable rutas el link que venga en la url, de existir uno, en caso de que no, por defecto tendra el index
        }else{
            $rutas ="index";
        }
        if( isset($_GET['accion'])){
            $accion= $_GET['accion'];
            $respuesta = AutosController::$accion();
            return $respuesta;
            
        }

        $respuesta = Modelo::RutasModelo($rutas);//con la ruta anteriormente generada, podemos pasar a nuestro Modelo
        include $respuesta;
    }
    
} 