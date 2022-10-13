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

  
}
    ?>