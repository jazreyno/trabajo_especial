<?php

class ModeloMarcas
{

    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_tpespecial;charset=utf8', 'root', '');
    }

    function TraerMarcas(){

        $query =$this->db->prepare("SELECT * FROM marcas");
        $query->execute();
        $marcas= $query->fetchAll(PDO::FETCH_OBJ);
     
          return $marcas;
    }
}
