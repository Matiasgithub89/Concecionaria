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
    public function BuscarPorFiltro(){
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
                case 'consulta_id':
                    if(!empty($_id))
                    {                    
                        $auto = AutosM::BuscarID($_id);
                        include "vista/modulos/mostrarbuscado.php";                     
                    }
                    break;
                    $database->cerrarConexion();
            }    
            
        }
    }  
    
   /* public function editarIdUrl(){  
             
        if(isset($_POST['btn-buscarID'])){            
                $_ID= $_POST['ID'];
                
            }       
    }  */
    public static function editar(){        
        try{
            if(isset($_GET['ID'])){
                $auto =  AutosM::Buscar($_GET['ID']);
               
            }
            
            if($_POST && (!isset($_POST['btn']))){
                echo("Primer Post");
                $id = $_POST['id'];
                $patente = $_POST['patente'];
                $marca = $_POST['marca'];
                $modelo = $_POST['modelo'];
                $anio = $_POST['anio'];
                $precio = $_POST['precio'];
                $descrip = $_POST['descrip'];                
                AutosM::editar($id, $patente, $marca, $modelo, $anio, $precio, $descrip);
                return include_once "vista/modulos/mostrar.php"; 
            }
           

            return include_once "vista/modulos/editar.php";
        }
        catch(DatabaseExeption $e){
            $error = $e->errorMessage();
            return include_once "vista/modulos/error.php";
        }
        catch(Exception $e){
            $error = "ocurrio un error al cargar la vista";
            return include_once "vista/modulos/error.php";
        }
        
        
    }
    public function borrar(){
        if(isset($_GET['ID'])){
            AutosM::borrar($_GET['ID']);

            include_once("vista/modulos/mostrar.php");
        }
        
    }
}
