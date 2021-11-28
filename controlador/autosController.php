<?php
include_once "modelo/conexionDb.php";
include_once "modelo/autosModelo.php";
include_once "exepciones.php";

class AutosController
{
    public function RegistrarAuto()
    {
        try {
            if (isset($_POST['btn'])) {
                $_patente = $_POST['patente'];
                $_marca = $_POST['marca'];
                $_modelo = $_POST['modelo'];
                $_anio = $_POST['anio'];
                $_precio = $_POST['precio'];
                $_descrip = $_POST['descrip'];

                validarForm($_patente, $_marca, $_modelo, $_anio, $_precio, $_descrip);

                AutosM::RegistrarAutosM($_patente, $_marca, $_modelo, $_anio, $_precio, $_descrip);
            }
        } catch (DatabaseExeption $e) {
            $error = $e->errorMessage();
            return include_once "vista/modulos/error.php";
        } catch (FormularioException $form) {
            $error = $form->errorMessage();
            return include_once "vista/modulos/error.php";
        }
        //Esta la usamos para capturar cualquier otro error
        catch (Exception $e) {
            $error = "se produjo un error al registrar";
            return include_once "vista/modulos/registrar.php";
        }
    }
    public static function BuscarPorFiltro()
    {
        try {
            if (isset($_POST['btn'])) {
                $_patente = $_POST['patente'];
                $_id = $_POST['id'];
                $_marca = $_POST['marca'];
                $buttonOption = $_POST['btn'];
                
                
                switch ($buttonOption) {
                    case 'consulta_patente':
                        if (!empty($_patente)) {
                            $auto = AutosM::BuscarPatente($_patente);
                            include "vista/modulos/mostrarbuscado.php";
                        }
                        break;
                        $database->cerrarConexion($conexion);
                    case 'consulta_marca':
                        if (!empty($_marca)) {
                            $auto = AutosM::consultarMarca($_marca);
                            include "vista/modulos/mostrarbuscadoMarca.php";
                        }
                        break;
                        $database->cerrarConexion($conexion);
                    case 'consulta_id':
                        if (!empty($_id)) {
                            $auto = AutosM::BuscarID($_id);
                            include "vista/modulos/mostrarbuscado.php";
                        }
                        break;
                        $database->cerrarConexion($conexion);
                }
            }
        } catch (DatabaseExeption $e) {
            $error = $e->errorMessage();
            return include_once "vista/modulos/error.php";
        }
        //Esta la usamos para capturar cualquier otro error
        catch (Exception $e) {
            $error = "ID o Patente no existen";
            return include_once "vista/modulos/registrar.php";
        }
    }
    public static function mostrar()
    {
        try {
            $listado = AutosM::consultar();
            return include_once "vista/modulos/mostrar.php";
        } catch (DatabaseExeption $e) {
            $error = $e->errorMessage();
            return include_once "vista/modulos/error.php";
        } catch (Exception $e) {
            $error = "A ocurrido un Error, intente nuevamente mas tarde o contacte un administrador";
            return include_once "vista/modulos/error.php";
        }
    }
    public static function editar()
    {
        try {
            if (isset($_GET['ID'])) {
                $auto =  AutosM::BuscarID($_GET['ID']);
            }

            if ($_POST && (!isset($_POST['btn']))) {
                echo ("Primer Post");
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
        } catch (DatabaseExeption $e) {
            $error = $e->errorMessage();
            return include_once "vista/modulos/error.php";
        } catch (Exception $e) {
            $error = "A ocurrido un Error, intente nuevamente mas tarde o contacte un administrador";
            return include_once "vista/modulos/error.php";
        }
    }
    public static function borrar()
    {
        if (isset($_GET['ID'])) {
            AutosM::borrar($_GET['ID']);

            include_once("vista/modulos/mostrar.php");
        }
    }
}
