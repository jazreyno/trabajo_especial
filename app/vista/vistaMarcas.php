<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';


class VistaMarcas
{
    private $smarty;

    function __construct()
    {
        $this->smarty=new Smarty();
    }

    function MostrarSelect($marcas)
    {
        $this->smarty->assign("marcas",$marcas);
        $this->smarty->display("formProductos.tpl");
    }

    function MostrarMarcas($marcas)
    {
        $this->smarty->assign ("marcas",$marcas);
        $this->smarty->display("tablaMarcas.tpl");
    }
      function mostrareditarMarcasTablaform($marcas){
        $this->smarty->assign ("marcas",$marcas);
        $this->smarty->display("templates/editProductos-2.tpl");
    }

    function mostrareditarMarcasTabla($marcas){
        $this->smarty->assign ("marcas",$marcas);
        $this->smarty->display("templates/editMarcas.tpl");
    }
    function SelectMarcas($marcas){
        $this->smarty->assign ("marcas",$marcas);
        $this->smarty->display("templates/formProductos.tpl");
    }
    
}    