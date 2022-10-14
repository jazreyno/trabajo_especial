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
    function insertarMarcas ( $marcas){   
        $query =$this->db->prepare("INSERT INTO marcas (marcas)  VALUES(?)");
        $query->execute([$marcas]);

        return $this->db->lastInsertId();
    }
    function borrarMarcas($id) {
        $query = $this->db->prepare('DELETE FROM `marcas` WHERE id_marcas = ?');
        $query->execute([$id]);
    }
    function editarMarcas($id){
        $query = $this->db->prepare('UPDATE `marcas` SET `marcas`= VALUES(?));
    }
}
