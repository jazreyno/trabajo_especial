<?php

require_once './app/controlador/controladorProductos.php';
require_once './app/controlador/controladorMarcas.php';
require_once './app/controlador/usuarios.php';


define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');


$action = 'productos';

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}
$controladorMarcas = new controladorMarcas();
$controladorProducto = new controladorProductos();
$controladorUsuarios= new controladorUsuarios();

$params = explode('/', $action);
switch ($params[0]) { 

case 'login':
    $controladorUsuarios->vistaLogin();
    break;
case 'validar':
    $controladorUsuarios->validarUsuario();
    break;
case 'logout':
    $controladorUsuarios->logout();
    break;
// Home
case '':
    $controladorUsuarios->vistaLogin();
    break;
case 'productos':       
    $controladorProducto->MostrarProductos(); 
    break;
case 'marcas':
    $controladorMarcas->MostrarMarcas();
    break;

case 'insertarproductos':
    $controladorProducto->insertarproductos();
    break;
case 'insertarMarcas':
    $controladorMarcas->insertarMarcas();
    break;    

case 'borrarProductos':
    $controladorProducto->borrarProductos($params[1]);
    break;
    
case 'borrarMarcas': 
     $controladorMarcas->borrarMarcas($params[1]);
    break;
    
case 'editarProductosForm':
    //utilice dos routers y dos funciones para que me muestre la tabla de productos y un select de marcas
    $controladorProducto->mostrareditartabla($params[1]);
    $controladorMarcas->mostrareditarMarcastabla();
    break;  
case 'editarProductos':
    $controladorProducto->editarProductos($params[1]);
    break;

case 'editarMarcasForm':
    $controladorMarcas->mostrareditarMarcas($params[1]);
    break;  

case 'editarMarcas':
    $controladorMarcas->editarMarcas($params[1]);
    break;  
case 'verProducto':
    $controladorProducto->verProducto($params[1]);
    break; 

default:
    echo ('404 Page not found');
    break;
}

 ?>
