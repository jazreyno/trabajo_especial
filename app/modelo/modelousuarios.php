<?php

class ModelosUsuarios{

    private $db;

    function __construct()
    {
        $this-> db = new PDO('mysql:host=localhost;'.'dbname=db_tpespecial;charset=utf8', 'root', '');
    }
     
    function traerUsuariosid ($email){
        $sentencia = $this->db->prepare("SELECT * FROM usuarios WHERE email=?");
        $sentencia->execute([$email]);
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
    
   
      
}

?>