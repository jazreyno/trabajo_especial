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

    // Home
case '':
    $controladorProducto->MostrarProductos();
    break;
case 'productos':       
    $controladorProducto->MostrarProductos(); 
    break;
case 'marcas':
    $controladorMarcas->MostrarMarcas();
    break;
case 'login':
    $controladorUsuarios->vistaLogin();
     break;

case 'insertarproductos':
    $controladorProducto->insertarproductos();
    break;
case 'insertarMarcas':
    $controladorMarcas->insertarMarcas();
    break;    

case 'borrarProductos':
    $id = $params[1];
    $controladorProducto->borrarProductos($id);
    break;
case 'borrarMarcas':
     $id = $params[1];
     $controladorMarcas->borrarMarcas($id);
    break;
default:
    echo ('404 Page not found');
    break;
}

/*if($params[0] ==='home'|| $params[0] === ''){
    $controladorProducto->MostrarProductos();
}
elseif($params[0]==='marcas'){
    $controladorMarcas->mostrarMarcas($params[1]);
}
elseif($params[0]==='productos'){
    $controladorProducto->MostrarProductos($params[1]);
}
elseif($params[0]==='insertarproductos' ()){
    $controladorProductor->insertarproductos()($params[1]);
}
else{
    echo('404 Page not found');
}*/





 ?>
