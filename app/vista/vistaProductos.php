<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
// require_once('templates/mostrartabla.php');


class vistaProductos
{
    private $smarty;

    function __construct()
    {
        $this->smarty=new Smarty();
    }

    function MostrarMarcas($marcas)
    {
        $this->smarty->assign ("marcas",$marcas);
        $this->smarty->display("mostrarlista.tpl");
    }
}
