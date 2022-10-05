<?php

require_once './app/controlador/controladorProductos.php';

/*tengo que poner mis dos bases o tres por que esta es la de los usuarios y la que se puede modificar*/
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');



$controlador= new controladorProductos();

$action= 'MostrarMarcas';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}
$params= explode('/', $action);
 
switch ($params[0]) {

    case 'MostrarMarcas': 
        $controlador->MostrarMarcas();
         break;
 /*   case 'insertarproductos': 
       $controlador -> insertarproductos(); 
        break;

     case 'editarProductos': 
        $controlador->editarProductos();
         break;
     case 'borrarProductos': 
       $controlador -> borrarProductos(); 
       break;


     default: 
         echo('404 Page not found'); 
         break;*/
      }

 ?>;

