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
        $producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $marcas= $_POST['marcas'];

        $id = $this->modelo->insertarproductos($producto, $cantidad, $marcas, $precio);

         header("Location: " . BASE_URL); 
        //$this->vista->MostrarProductos($productos);
       
    }
    function borrarProductos($id) 
    {
        $this->modelo->borrarProductos($id);
        header("Location: " . BASE_URL);
        
    }
}    