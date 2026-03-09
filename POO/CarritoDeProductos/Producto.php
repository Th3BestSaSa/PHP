<?php

declare(strict_types=1);
class Producto
{
    public $codigo;
    public $nombre;
    public $precio;

    public function __construct($codigo, $nombre, $precio)
    {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    // --- GETTERS ---
    public function getCodigo()
    {
        return $this->codigo;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    // --- SETTERS ---
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }


    public function __toString()
    {
        return "Codigo {$this->codigo} Nombre: {$this->nombre} Precio: {$this->precio}";
    }
}
