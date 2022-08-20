<?php

require_once 'modelo/producto.php';
require_once 'modelo/lineaCompra.php';
require_once 'modelo/proveedor.php';
require_once 'modelo/pedidoCompra.php';

$prod1 = new Producto();
$prod1->setDescripcion('Biromes');

$prod2 = new Producto();
$prod2->setDescripcion('Lapices');

$lineaC1 = new LineaCompra();
$lineaC1->setProducto($prod1);

$lineaC2 = new LineaCompra();
$lineaC2->setProducto($prod2);

$prov = new Proveedor();
$prov->setDescripcion('Fulano');

$p = new PedidoCompra();
$p->setFecha('20/08/2022');
$p->setLineasCompras($lineaC1);
$p->setLineasCompras($lineaC2);

$p->MostrarInformacion();
