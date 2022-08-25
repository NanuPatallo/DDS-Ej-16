<?php

class PedidoCompra
{
    private $fecha;
    private $proveedor;
    private $fechaEntregaEstimada;
    private $costoTotal;
    private $pedidoCerrado;
    private $listLineasCompras = array();




    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }




    public function getProveedor()
    {
        return $this->proveedor;
    }

    public function setProveedor($proveedor)
    {
        $this->proveedor = $proveedor;
    }




    public function getFechaEntregaEstimada()
    {
        return $this->fechaEntregaEstimada;
    }

    public function setFechaEntregaEstimada($fechaEntregaEstimada)
    {
        $this->fechaEntregaEstimada = $fechaEntregaEstimada;
    }




    public function getCostoTotal()
    {
        return $this->costoTotal;
    }

    public function setCostoTotal($costoTotal)
    {
        $this->costoTotal = $costoTotal;
    }




    public function getPedidoCerrado()
    {
        return $this->pedidoCerrado;
    }

    public function setPedidoCerrado($pedidoCerrado)
    {
        $this->pedidoCerrado = $pedidoCerrado;
    }




    public function getListLineasCompras()
    {
        return $this->listLineasCompras;
    }

    public function setLineasCompras($lineasCompras)
    {
        $this->listLineasCompras[] = $lineasCompras;
    }




    public function MostrarInformacion()
    { //fecha , proveedor(descripcion), fecha entrega estimada, 
        //costo total, pedido cerrado,lineas de compra(producto(descripcion y precio de venta),
        // cant, costo unitario y entrega) 

        echo 'Fecha de Pedido: ' . $this->getFecha() . '<br>';

        echo 'Proveedor: ' . $this->getProveedor()->getDescripcion() . '<br>';

        echo 'Fecha Estimada de Entrega: ' . $this->getFechaEntregaEstimada() . '<br>';

        echo 'Costo Total: ' . $this->getCostoTotal() . '<br>';

        echo 'Pedido Cerrado: ' . $this->getPedidoCerrado() . '<br>';

        echo 'Linea de Compra: ' . '<br>';
        foreach ($this->getListLineasCompras() as $c) {
            echo 'Producto: ' . $c->getProducto()->getDescripcion() . '<br>';
            echo 'Precio de Venta: ' . $c->getProducto()->getPrecioVta() . '<br>';
            echo 'Cantidad: ' . $c->getCantidad() . '<br>';
            echo 'Costo Unitario: ' . $c->getCostoUnitario() . '<br>';
            echo 'Entrega: ' . $c->getFueEntregado() . '<br>';
        }
    }
}
