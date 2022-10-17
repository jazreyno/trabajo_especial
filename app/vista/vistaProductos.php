<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';



class VistaProductos
{
    private $smarty;

    function __construct()
    {
        $this->smarty=new Smarty();
    }
    function MostrarProductos($productos)
    {
        $this->smarty->assign ("productos",$productos);
        $this->smarty->display("tablaProductos.tpl");
    }
    function MostrarProductosEdit($productos)
    {
        $this->smarty->assign ("productos",$productos);
        $this->smarty->display("templates/editProductos-1.tpl");
    }
    function mostrarSoloProducto($producto)
    {
        $this->smarty->assign ("productos",$producto);
        $this->smarty->display("templates/verProducto.tpl");
    
    }
   

}
