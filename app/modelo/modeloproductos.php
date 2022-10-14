<?php
 
class FuncionesTabla{
   
    private $db;

    function connect ()
    {
        $this-> db = new PDO('mysql:host=localhost;'.'dbname=db_tpespecial;charset=utf8', 'root', '');
    }

    function TraerProductos(){
        $db = $this->connect(); 
        $query=$this->db->prepare("SELECT * FROM productos");
        $query->execute();
        $productos= $query->fetchAll(PDO::FETCH_OBJ);
     
          return $productos;
    }

    function insertarproductos($producto, $cantidad, $marcas, $precio){
        $db = $this->connect(); 
        $query =$this->db->prepare("INSERT INTO productos (producto, cantidad, marcas_id, precio)  VALUES(?,?,?,?)");
        $query->execute([$producto, $cantidad, $marcas, $precio]);
        
        return $this->db->lastInsertId();

    
    }
    function borrarProductos($id) {
        $db = $this->connect(); 
        $query = $this->db->prepare('DELETE FROM `productos` WHERE id_productos = ?');
        $query->execute([$id]);
    }
   
}