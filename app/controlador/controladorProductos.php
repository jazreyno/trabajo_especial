<?php

require_once "./app/vista/vistaProductos.php";
require_once "./app/modelo/modeloproductos.php";
require_once "./app/helper/helper.php";
class controladorProductos
{

    private $vista;
    private $modelo;
    private $helper;

    function __construct()
    {
        $this->vista = new VistaProductos();
        $this->modelo = new FuncionesTabla();
        $this->helper=new  userHelper();
    }


    function MostrarProductos()
    {
        $this->helper->checkInicio();
        $productos=$this->modelo->TraerProductos();
        $this->vista->MostrarProductos($productos);
    }
    function insertarproductos ()
    {
        $this->helper->checkLoggedIn();
        $producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $marcas= $_POST['marcas'];

        $id = $this->modelo->insertarproductos($producto, $cantidad, $marcas, $precio);

         header("Location: " . BASE_URL . "productos"); 
       
    }
    function borrarProductos($id) 
    {
        $this->helper->checkLoggedIn();
        $this->modelo->borrarProductos($id);
   
        header("Location: " . BASE_URL . "productos"); 
        
    }
    function mostrareditartabla ($id)
    {
        $this->helper->checkLoggedIn();
        $productos=$this->modelo->TraerProductosId($id);
        $this->vista->MostrarProductosEdit($productos); 
    }
    
    function editarProductos($id){
        $this->helper->checkLoggedIn();
        $producto = $_POST['producto_edit'];
        $cantidad = $_POST['cantidad_edit'];
        $precio = $_POST['precio_edit'];
        $marcas= $_POST['marcas_edit'];

        $this->modelo->editarProductos($producto, $cantidad, $precio, $marcas, $id);

        header("Location: " . BASE_URL . "productos" );
        
      
    }
    function verProducto($id){
        $this->helper->checkInicio();
        $producto=$this->modelo->TraerProductosId($id);
        $this ->vista->mostrarSoloProducto($producto);
    }
}    