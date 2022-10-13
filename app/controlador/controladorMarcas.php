<?php

require_once "./app/vista/vistaMarcas.php";
require_once "./app/modelo/ModeloMarcas.php";

class controladorMarcas
{

    private $vista;
    private $modelomarcas;

    function __construct()
    {
        $this->vista = new VistaMarcas();
        $this->modelomarcas = new ModeloMarcas();
        
    }


    function MostrarMarcas()
    {
        $marcas = $this->modelomarcas->TraerMarcas();
        $this->vista->MostrarMarcas($marcas);
    }   
    function insertarMarcas ()
    {
        $marcas = $_POST['marcas'];

        $id = $this->modelo->insertarMarcas($marcas);

        header("Location: " . BASE_URL); 
     
       
    }
    function borrarMarcas($id) 
    {
        $this->modelo->borrarMarcas($id);
        header("Location: " . BASE_URL);
    }
}
