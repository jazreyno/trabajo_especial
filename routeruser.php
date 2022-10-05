<?php

require_once './controlador/productos.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$controlador= new controladorProductos;


if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}
switch ($params[0]) {

    case 'home': 
        $cotrolador->Home(); 
        break;

        default: 
        echo('404 Page not found'); 
        break;
     }

 ?>;