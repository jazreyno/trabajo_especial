<?php

require_once "./app/vista/vistaMarcas.php";
require_once "./app/modelo/ModeloMarcas.php";
require_once "./app/helper/helper.php";
class controladorMarcas
{
 
    private $vista;
    private $modelomarcas;
    private $helper;

    function __construct()
    {
        $this->vista = new VistaMarcas();
        $this->modelomarcas = new ModeloMarcas();
        $this->helper=new  userHelper();
        
    }


    function MostrarMarcas()
    {
        $this->helper->checkInicio();
        $marcas = $this->modelomarcas->TraerMarcas();
        $this->vista->MostrarMarcas($marcas);
    }  
    function MostrarSelect()
    {
        $this->helper->checkInicio();
        $marcas=$this->modelomarcas->TraerMarcas();
        $this->vista->MostrarSelect($marcas);
    } 
    function insertarMarcas ()
    {
        $this->helper->checkLoggedIn();
        $marcas = $_POST['marcas'];

         $this->modelomarcas->insertarMarcas($marcas);
        
        header("Location: " . BASE_URL. "marcas"); 
    
    }
    function borrarMarcas($id) 
    {
        $this->helper->checkLoggedIn();
        $this->modelomarcas->borrarMarcas($id);
        header("Location: " . BASE_URL. "marcas"); 

    }
    function mostrareditarMarcasTabla()
    {
        $this->helper->checkLoggedIn();
        $marcas = $this->modelomarcas->TraerMarcas();
        $this->vista->mostrareditarMarcasTablaform($marcas);
    
    } 
    function MarcasSelect()
    {
        $this->helper->checkLoggedIn();
        $marcas = $this->modelomarcas->TraerMarcas();
        $this->vista->SelectMarcas($marcas);
    
    } 

   function mostrareditarMarcas($id){
        $this->helper->checkLoggedIn();
        $marcas = $this->modelomarcas->TraerMarcasid($id);
        $this->vista->mostrareditarMarcasTabla($marcas);
       
    }
    function editarMarcas($id)
    { 
        $this->helper->checkLoggedIn();
        $marcas_edit= $_POST['marcas_edit'];

        $this->modelomarcas->editarMarcas($marcas_edit,$id);

        header("Location: " . BASE_URL. "marcas"); 
    }
}
