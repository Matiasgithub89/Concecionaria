<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
class AutosM extends ConexionDb 
{
    private $id;
    private $patente;
    public $marca;
    public $modelo;
    public $anio;
    public $precio;
    public $descrip;

    public function __construct($_id,$_patente, $_marca, $_modelo, $_anio, $_precio, $_descrip)    {
        $this->id = $_id;
        $this->patente = $_patente;
        $this->marca = $_marca;
        $this->modelo = $_modelo;
        $this->anio = $_anio;
        $this->precio = $_precio;
        $this->descrip = $_descrip;
    }
    public function getID(){
        return $this->id;
    }
    public function getPatente(){
        return $this->patente;
    }
    
   
    public static function RegistrarAutosM($_patente,$_marca, $_modelo, $_anio, $_precio, $_descrip)
    {

        $conexion = ConexionDb::crearConexion();

        // Codigo SQL para insertar datos en la tabla personas 
        $query = "INSERT INTO autos (patente, marca, modelo, anio, precio, descrip) values ('$_patente','$_marca','$_modelo','$_anio','$_precio','$_descrip')";
        $exito = mysqli_query($conexion, $query);

        if ($exito) {
            echo "Se guardaron correctamente los datos";
        } else {
            echo "Hubo un error al guardar los datos" . mysqli_error($conexion);
        }
    }
    public static function consultar(){
        $listaauto = [];
        $conexion = ConexionDb::crearConexion();
        $consulta = "SELECT * FROM autos";
        if ($resultado = mysqli_query($conexion, $consulta)) {
            //Obtener la lista de usuarios 
            while ($auto= $resultado->fetch_object()) {

                $listaauto[] = new AutosM($auto->ID, $auto->patente, $auto->marca, $auto->modelo, $auto->anio,$auto->precio,$auto->descrip);
            }
        }

        return $listaauto;
    }
    public static function BuscarPatente($patente){
        //Obtenemos una conexion a la base de datos
        $conexion = ConexionDb::crearConexion();
        //Armamos la consulta que sera ejecutada en la base de datos
        $query = "SELECT * FROM autos WHERE patente = '$patente' ";
        //Ejecutamos la consulta
        $resultado = mysqli_query($conexion, $query);

        //Vericamos que se halla ejecutado correctamente la consulta
        if($resultado){
            //Verificamos que halla encontrado un resultado
            if (mysqli_num_rows($resultado) > 0){
                //Obtenemos el resultado como un objeto
                $auto = $resultado->fetch_object();

                //Devolvemos un objeto del tipo auto
                return new AutosM($auto->ID, $auto->patente, $auto->marca, $auto->modelo, $auto->anio,$auto->precio,$auto->descrip);
               
            }
            else{
                echo "El el auto con esa patente no se encuentro";
            }
            
        }
        else{
            echo "Hubo un error al buscar el auto: ".mysqli_error($conexion);
        }
    }
    public static function borrar($id){
        $conexion = ConexionDb::crearConexion();
        $query = "DELETE FROM autos WHERE id = '$id'";
        $exito = mysqli_query($conexion, $query);

        if(!$exito){
            echo "Hubo un error al eliminar el registro: ".mysqli_error($conexion);
        }
    }
}