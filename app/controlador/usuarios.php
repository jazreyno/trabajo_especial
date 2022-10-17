<?php

require_once './app/modelo/modelousuarios.php';
require_once './app/vista/vistausuarios.php';
require_once './app/helper/helper.php';

class controladorUsuarios
{
    private $helper;
    private $vista;
    private $modelo;

    function __construct()
    {
        $this->vista = new vistausuarios();
        $this->modelo = new ModelosUsuarios();

    }
    public function vistaLogin() {
        $this->vista->mostrarLogin();
    }
    public function validarUsuario()
    {
        $email = $_POST['email'];
        $contraseña = $_POST['contraseña'];
        $hash = password_hash($contraseña, PASSWORD_DEFAULT);

        $usuario= $this->modelo->mostrarUsuarios($email);

        if(!empty($usuario)  && password_verify ($usuario[0]->contraseña, $hash)){
            session_start();
            $_SESSION['USER_ID'] = $usuario->id;
            $_SESSION['USER_EMAIL'] = $usuario->email;
            $_SESSION['IS_LOGGED'] = true;

            header("Location: " . BASE_URL);

        } else {
        // si los datos son incorrectos muestro el form con un erro
         $this->vista->mostrarLogin("El usuario o la contraseña no existe.");
        } 
         function estaLogeado() {
            $log = false;
            session_start();
            if (!isset($_SESSION['IS_LOGGED'])) {
                $log = true;
            }
            return $log;
    
             }
        
         }
            function logout() 
            {
            session_start();
            session_destroy();
            header("Location: " . BASE_URL);
            }
            
   
}
?>
