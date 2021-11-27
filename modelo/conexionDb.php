
<?php
include_once "Controlador/exepciones.php";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
class ConexionDb
{
   //atributo estatico donde guardaremos la conexion
   private static $conexion=NULL;

   public static function crearConexion(){

       //Verificamos que la conexion no este creada
       if(!isset( self::$conexion)){

           //Si no esta creada pasamos a crearla
           try{
               self::$conexion = mysqli_connect("localhost","root", "", "concecionaria");
           }
           catch(Exception $e){
               //Guardamos el mensaje para el programador
               guardarError($e->getMessage(), $e->getLine() ,$e->getFile());
               //Lanzamos un mensaje para el usuario
               throw new DatabaseExeption("No hemos podido conectar con la base de datos");
           }
           
       }

       return self::$conexion;
   }
   public static function cerrarConexion($conexion){
    mysqli_close($conexion);
}
    

}