<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';


class VistaMarcas
{
    private $smarty;

    function __construct()
    {
        $this->smarty=new Smarty();
    }

    function MostrarMarcas($marcas)
    {
        $this->smarty->assign ("marcas",$marcas);
        $this->smarty->display("tablaMarcas.tpl");
    }
}    