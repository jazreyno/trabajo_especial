<?php
 
class FuncionesTabla{
   
    private $db;

    function __construct()
    {
        $this-> db = new PDO('mysql:host=localhost;'.'dbname=db_tpespecial;charset=utf8', 'root', '');
    }

    function TraerProductos(){

        $query=$this->db->prepare("SELECT * FROM productos");//("SELECT * FROM productos INNER JOIN marcas ON productos.marcas_id = marcas.id_marcas");
        $query->execute();
        $productos= $query->fetchAll(PDO::FETCH_OBJ);
     
          return $productos;
    }

    function insertarproductos($producto, $cantidad, $marcas, $precio){
        
        $query =$this->db->prepare("INSERT INTO productos (producto, cantidad, marcas_id, precio)  VALUES(?,?,?,?)");
        $query->execute([$producto, $cantidad, $marcas, $precio]);
        
        return $this->db->lastInsertId();

    
    }
    function borrarProductos($id) {
        $query = $this->db->prepare('DELETE FROM `productos` WHERE id = ?');
        $query->execute([$id]);
    }
   
}