<?php

class ProductDTO{
    private $id;
    private $name;
    private $categoria;
    private $precio;
    private $fecha;
    private $stock;

    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function getPrecio(){
        return $this->precio;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function getStock(){
        return $this->stock;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setCategoria($categoria){
        $this->categoria = $categoria;
    }
    public function setPrecio($precio){
        $this->precio = $precio;
    }
    public function setFecha($fecha){
        $this->fecha = $fecha;
    }
    public function setStock($stock){
        $this->stock = $stock;
    }
    
}

?>