<?php
requiere('libro.php');

class Comic extends Libro{
    public string $autor;
    public string $titulo;
    public float $precio;
    public int $stock;
    public int $id;
    public int $volumen;
    public array $ilustradores;

    public function __construct()
    {
        parent::__construct($this->$autor,$this->$titulo,$this->$precio,$this->$stock,$this->$id);
        }
}