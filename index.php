
<?php
require_once 'model/db.php';
//Incluyo los archivos necesarios
require("./controller/controller.php");

//Instancio el controlador
$controller = new Controller;

//Decido la ruta en función de los elementos del array
if (isset($_GET['op']))
{
    $opcion=$_GET['op'];
    if ($opcion=="crear"){

    //Llamo al método ver pasándole la clave que me están pidiendo
    $controller->CrearUsuario();
    }
    elseif ($opcion=="registrar"){

    //Llamo al método ver pasándole la clave que me están pidiendo

    $controller->Guardar();
    }
    elseif ($opcion=="acceder"){

        //Llamo al método ver pasándole la clave que me están pidiendo
    
        $controller->Ingresar();
     }
    elseif ($opcion=="permitido"){

        //Llamo al método ver pasándole la clave que me están pidiendo
    
        $controller->IngresarPanel();
    }
    else{

    //Llamo al método por defecto del controlador
        $controller->Index();
    }
}
else{

        //Llamo al método por defecto del controlador
        $controller->Index();
    }

