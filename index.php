<?php

require_once 'modelo/producto.php';
require_once 'modelo/lineaCompra.php';
require_once 'modelo/proveedor.php';
require_once 'modelo/pedidoCompra.php';


//Donde Corresponda;
//Declarar e instanciar un proveedor y setearle todas sus propiedades.
//Declarar e instanciar 2 Productos y setearle todas sus propiedades.
//Declarar e instanciar 2 lineas de compra y setearle a cada una un producto, además de todas las demás propiedades.
//Finalmente instanciar un pedido de compra y setearle además de sus propiedades básicas, las dos líneas de compra 
//anteriores , y el proveedor anterior
//Finalmente llamar al método mostrar información de las clase pedido de compra.

$prod1 = new Producto();
$prod1->setCodigo('1212');
$prod1->setDescripcion('Biromes');
$prod1->setPrecioVta('$ 0,80');

$prod2 = new Producto();
$prod2->setCodigo('3030');
$prod2->setDescripcion('Lapices');
$prod2->setPrecioVta('$ 0,75');

$lineaC1 = new LineaCompra();
$lineaC1->setProducto($prod1);
$lineaC1->setCantidad('100');
$lineaC1->setCostoUnitario('0,50');
$lineaC1->setFueEntregado(TRUE);

$lineaC2 = new LineaCompra();
$lineaC2->setProducto($prod2);
$lineaC2->setCantidad('150');
$lineaC2->setCostoUnitario('0,45');
$lineaC2->setFueEntregado(TRUE);

$prov = new Proveedor();
$prov->setId('5558');
$prov->setDescripcion('Fulano');

$p = new PedidoCompra();
$p->setFecha('20/08/2022');
$p->setProveedor($prov);
$p->setFechaEntregaEstimada('30/08/2022');
$p->setCostoTotal('$1500.-');
$p->setPedidoCerrado(TRUE);
$p->setLineasCompras($lineaC1);
$p->setLineasCompras($lineaC2);

$p->MostrarInformacion();
