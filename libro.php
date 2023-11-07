<?php

class Libro {
    //propiedades de libro
   public $autor;
   public $titulo;
   public $precio;
   public $stock;
   public $id;
   //Metodo magico__construct
   public function __construct($autor,$titulo,$precio,$stock,$id)
   {$this->autor=$autor;
    $this->titulo=$titulo;
    $this->precio=$precio;
    $this->stock=$stock;
    $this->id=$id;
   }

   public function getautor(){
    $escritor = $this->autor;
    return $escritor;}
    public function getTitulo(){
    $t;
    }
   
   public function getInfo(){
    $info ="Autor del Libro: $this->autor<br>
    Titulo del Libro: $this->titulo <br>
    Precio: $this->precio <br>
    Cantidad de Copias: $this->stock <br>
    Su id es:$this->id";
    return $info;
   }
}

$libro1= new Libro(
"Stephen King",
"it",
2500.99,
10,
1);
echo $libro1->getInfo();
