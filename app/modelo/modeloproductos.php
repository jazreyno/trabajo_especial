<?php
 
class FuncionesTabla{
    private $db;

    function __construct()
    {
        $this-> db = new PDO('mysql:host=localhost;'.'dbname=db_tpespecial;charset=utf8', 'root', '');
    }

    function TraerProductos(){

        $sentencia =$this->db->prepare("SELECT * FROM `productos`");
        $sentencia->execute();
        $marcas= $sentencia->fetchAll(PDO::FETCH_OBJ);
     
          return $marcas;
    }

    function insertarproductos(){
        
        $sentencia =$this->db->prepare("INSERT INTO `productos`(`producto`, `cantidad`)  VALUES(?,?,?,?)");
        
        $completo = 0;
        if(isset($_POST['producto'])){
            $completo = 1;
        }
        $sentencia->execute(array($_POST['producto'],$_POST['cantidad']));
        header("Location: home");
    }
   /* function editarProductos() {

    }
    function borrarProductos (){

    }*/
}