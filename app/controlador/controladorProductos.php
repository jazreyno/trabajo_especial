<?php

require_once "./app/vista/vistaProductos.php";
require_once "./app/modelo/modeloproductos.php";

class controladorProductos
{

    private $vista;
    private $modelo;

    function __construct()
    {
        $this->vista = new VistaProductos();
        $this->modelo = new FuncionesTabla();

    }


    function MostrarProductos()
    {
        $productos=$this->modelo->TraerProductos();
        $this->vista->MostrarProductos($productos);
    }
    function insertarproductos ()
    {
       // $this->helper->checkLoggedIn();
        $producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $marcas= $_POST['marcas'];

        $id = $this->modelo->insertarproductos($producto, $cantidad, $marcas, $precio);

         header("Location: " . BASE_URL . "productos"); 
       
    }
    function borrarProductos($id) 
    {
        //$this->helper->checkLoggedIn();
        $this->modelo->borrarProductos($id);
   
        header("Location: " . BASE_URL . "productos"); 
        
    }
    function mostrareditartabla ($id)
    {
        $productos=$this->modelo->TraerProductosId($id);
        $this->vista->MostrarProductosEdit($productos); 
    }
    
    function editarProductos($id){
        $producto = $_POST['producto_edit'];
        $cantidad = $_POST['cantidad_edit'];
        $precio = $_POST['precio_edit'];
        $marcas= $_POST['marcas_edit'];

        $this->modelo->editarProductos($producto, $cantidad, $precio, $marcas, $id);

        header("Location: " . BASE_URL . "productos" );
        
      
    }
    function verProducto($id){
        $producto=$this->modelo->TraerProductosId($id);
        $this ->vista->mostrarSoloProducto($producto);
    }
}    