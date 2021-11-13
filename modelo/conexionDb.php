<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
class ConexionDb
{
    //atributo estatico donde guardaremos la conexion
    private static $conexion = NULL;

    public static function crearConexion()
    {

        //Verificamos que la conexion no este creada
        if (!isset(self::$conexion)) {

            //Si no esta creada pasamos a crearla
            self::$conexion = mysqli_connect("localhost", "root", "", "concecionaria");

            // Chequea la coneccion
            if (!self::$conexion) {
                die("La conexion fallo: " . mysqli_connect_error());
            }
        }

        return self::$conexion;
    }
    public function cerrarConexion(){
        mysqli_close($this->conexion);
    }
    

}