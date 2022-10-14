<?php

require_once './app/modelo/modelousuarios.php';
require_once './app/vista/vistausuarios.php';


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

        $usuario= $this->modelo->mostrarUsuarios($email);

        if($usuario && password_verify ($contraseña, $usuario->contraseña)){
            session_start();
            $_SESSION['USER_ID'] = $usuario->id;
            $_SESSION['USER_EMAIL'] = $usuario->email;
            $_SESSION['IS_LOGGED'] = true;

            header("Location: " . BASE_URL);

        } else {
        // si los datos son incorrectos muestro el form con un erro
         $this->vista->mostrarLogin("El usuario o la contraseña no existe.");
        } 


         function logout() 
        {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
        }
    }
}
?>
