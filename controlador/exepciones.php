<?php
include_once "./log.php";
    class DatabaseExeption extends Exception {
            //Mensaje personalizado para el usuario, cuando se produce un error en la BD
            public function errorMessage() {
                $errorMsg = 'Lo sentimos: '.$this->getMessage();

                return $errorMsg;
            }
        }

    class FormularioException extends Exception {
        //Mensaje personalizado para el usuario, cuando se produce un error en el formulario
        public function errorMessage() {
            $errorMsg = "Debe completar los campos obligatorios: ".$this->getMessage();             
            return $errorMsg;
        }
    }

    //Convertimos errores en excepciones
    function errorHandler($error_level,$error_message, $error_file,$error_line) {
        guardarError($error_message, $error_line,$error_file);
        throw new Exception("");
    }


    function validarForm($_patente, $_marca, $_modelo, $_anio, $_precio, $_descrip){
        $mensaje = '';

        if(empty($_patente)){
            $mensaje = ' Patente';
        }

        if(empty($_marca)){
            $mensaje .= ' Marca';
        }

        if(empty($_modelo)){
            $mensaje.= ' Modelo';
        }
        if(empty($_anio)){
            $mensaje.= ' Anio';
        }
        if(empty($_precio)){
            $mensaje.= ' Precio';
        }
        if(empty($_descrip)){
            $mensaje.= ' Descripcion';
        }
        if(!empty($mensaje)){

            throw new FormularioException($mensaje);
        }
    }



?>