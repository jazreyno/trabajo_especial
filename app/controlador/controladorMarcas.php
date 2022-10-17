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
       // $this->helper->checkLoggedIn();
        $marcas = $_POST['marcas'];

        $id = $this->modelomarcas->insertarMarcas($marcas);
        
        header("Location: " . BASE_URL. "/marcas"); 
    
    }
    function borrarMarcas($id) 
    {
       // $this->helper->checkLoggedIn();
        $this->modelomarcas->borrarMarcas($id);
        header("Location: " . BASE_URL. "marcas"); 
    }
    function mostrareditarMarcasTabla()
    {
        $marcas = $this->modelomarcas->TraerMarcas();
        $this->vista->mostrareditarMarcasTablaform($marcas);
    
    } 
   function mostrareditarMarcas($id){
        $marcas = $this->modelomarcas->TraerMarcasid($id);
        $this->vista->mostrareditarMarcasTabla($marcas);
       
    }
    function editarMarcas($id)
    { 
        $marcas_edit= $_POST['marcas_edit'];

        $this->modelomarcas->editarMarcas($marcas_edit,$id);

        header("Location: " . BASE_URL. "marcas"); 
    }
}
