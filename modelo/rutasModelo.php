<?php

class Modelo{
    static public function RutasModelo($rutas){
        if ($rutas == "ingreso" || $rutas == "registrar"|| $rutas == "mostrar"||$rutas == "buscarAuto"|| $rutas == "grafico"){//Si hay una ruta valida
           
            $pagina = "vista/modulos/".$rutas .".php";//generamos un link a partir del contenido de la variable ruta concatenando
        
        }else if($rutas == "index"){  
                         
            $pagina= "vista/modulos/mostrar.php";

        }else{

            $pagina = "vista/modulos/NotFound.php";

        }
        return $pagina;
    }
}