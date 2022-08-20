<?php

class Producto
{
    private $codigo;
    private $descripcion;
    private $precioVta;


    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }





    public function getDescripcion()
    {
        return $this->descripcion;
    }


    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }




    public function getPrecioVta()
    {
        return $this->precioVta;
    }


    public function setPrecioVta($precioVta)
    {
        $this->precioVta = $precioVta;
    }
}
