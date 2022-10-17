<?php

require_once './app/modelo/modelousuarios.php';
require_once './app/vista/vistausuarios.php';
require_once './app/helper/helper.php';

class controladorUsuarios
{
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


        $usuario= $this->modelo->traerUsuariosid($email);

        if( $usuario && password_verify ($contraseña, $usuario->contraseña )){
            session_start();
            $_SESSION['USER_ID'] = $usuario->id_usuarios;
            $_SESSION['USER_EMAIL'] = $usuario->email;
            $_SESSION['IS_LOGGED'] = true;

            header("Location: " . BASE_URL . "productos");

        } else {
         $this->vista->mostrarLogin("El usuario o la contraseña no existe.");
        } 
      
         }
            function logout() 
            {
            session_start();
            session_destroy();
            header("Location: " . BASE_URL );
            }
            
   
}
?>
