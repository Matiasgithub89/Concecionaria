<?php
include_once "modelo/conexionDb.php";
include_once "modelo/autosModelo.php";
class AutosController{
    public function RegistrarAuto(){
        if(isset($_POST['btn']))
        {
            $_patente= $_POST['patente'];
            $_marca= $_POST['marca'];
            $_modelo= $_POST['modelo'];
            $_anio= $_POST['anio'];
            $_precio= $_POST['precio'];
            $_descrip= $_POST['descrip'];
            $buttonOption = $_POST['btn'];
            
        
            $database = new ConexionDb();
    
            switch ($buttonOption)
            {
                case 'registrar':
                    if(empty($_patente) ||empty($_marca) || empty($_modelo) || empty($_anio)|| empty($_precio)|| empty($_descrip))
                    {
                        echo 'Los campos DNI, nombre y apellido son obligatorios';
                    }
                    else
                    {
                        AutosM::RegistrarAutosM($_patente,$_marca, $_modelo, $_anio, $_precio, $_descrip);
                    }
                    break;
                case 'borrar':
                    if(isset($_GET['id'])){
                        AutosM::borrar($_GET['id']);        
                        header("Location:./?rutas=show");
                    }
                    break; 
                $database->cerrarConexion();  
                   
            }
            
            
        }
    }
    public function BuscarPatente(){
        if(isset($_POST['btn']))
        {
            $_patente= $_POST['patente'];
            $buttonOption = $_POST['btn'];
            
            $database = new ConexionDb();

            switch ($buttonOption) 
            {
                case 'consulta_patente':
                if(!empty($_patente))
                {                    
                    $auto = AutosM::BuscarPatente($_patente);
                    include "vista/modulos/mostrarbuscado.php";                     
                }
                break;
                $database->cerrarConexion();
            }    
            
        }
    }
}
