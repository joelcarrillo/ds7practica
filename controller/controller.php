<?php
session_start();// Comienzo de la sesión

require_once 'model/usuario.php';


class Controller
{
    private $model;
    private $resp;
    
    public function __CONSTRUCT(){
        $this->model = new Usuario();
    }

    public function Index(){

        //Le paso los datos a la vista
        require("view/login.php");

    }

    public function CrearUsuario(){

        require("view/crearUsuario.php");

    }

    public function IngresarPanel(){

        require("view/panel.php");

    }

    public function Guardar(){
        $usuario = new Usuario();
        
        $usuario->nombre = $_REQUEST['nombre'];
        $usuario->apellido = $_REQUEST['apellido'];
        $usuario->email = $_REQUEST['correo'];  
        $usuario->pass = md5($_REQUEST['password1']);    
      
        $this->resp= $this->model->Registrar($usuario);

        header('Location: ?op=crear&msg='.$this->resp);
    }

    public function Ingresar(){
        $ingresarUsuario = new Usuario();
        
        $ingresarUsuario->email = $_REQUEST['correo'];  
        $ingresarUsuario->pass = md5($_REQUEST['password']);    

        //Verificamos si existe en la base de datos
        if ($resultado= $this->model->Consultar($ingresarUsuario))
        {
            $_SESSION["acceso"] = true;
            $_SESSION["user"] = $resultado->nombre." ".$resultado->apellido;
            header('Location: ?op=permitido');

        }
        else
        {
            header('Location: ?&msg=Su contraseña o usuario está incorrecto');
        }

        


    }

}
