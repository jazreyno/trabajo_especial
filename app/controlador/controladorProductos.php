<?php

require_once "./app/vista/vistaProductos.php";
require_once "./app/modelo/ModeloMarcas.php";

class controladorProductos
{

    private $vista;
    private $modelo;

    function __construct()
    {
        $this->vista = new vistaProductos();
        $this->modelo = new ModeloMarcas();
    }


    function MostrarMarcas()
    {
        $marcas = $this->modelo->TraerMarcas();
        $this->vista->MostrarMarcas($marcas);
    }

 /*   function insertarproductos ()
    {
        ($this->modelo->insertarproductos());
        $this->vista->insertarproductos();
    }*/
}
