<?php

include 'Command/TiendaCommandee.php';

$tienda = new TiendaCommandee();
/*
  //[objeto tienda], [tabla bd], [nombre atributos] , [valores de atributos], [orderby]
  $commandAllProduct = new BuscarTiendaCommand($tienda,'usuario',null,null,null);
  $commandAllProduct->execute();
  print_r($tienda->getResponse());
 */

//[objeto tienda], [tabla bd], [nombre atributos] , [valores de atributos], [orderby]
$starsOff = new BuscarTiendaIdCommand($tienda, 'usuario', array('id'), array(1), null);
$starsOff->execute();
print_r($tienda->getResponse());
