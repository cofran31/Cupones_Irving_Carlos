<?php

include 'Command/TiendaCommandee.php';
include 'Decorator/WebPage.php';

$tienda = new TiendaCommandee();

//[objeto tienda], [tabla bd], [nombre atributos] , [valores de atributos], [orderby]
//$commandAllProduct = new BuscarTiendaCommand($tienda, 'usuario', null, null, null);
//$commandAllProduct->execute();
//$data = $tienda->getResponse();

//[objeto tienda], [tabla bd], [nombre atributos] , [valores de atributos], [orderby]
$starsOff = new BuscarTiendaIdCommand($tienda, 'usuario', array('id'), array(1), null);
$starsOff->execute();
$data = $tienda->getResponse();

$documento = new WebPage($data);
$service = new JsonRenderer($documento);
$proceso = $service->renderData();
print_r($proceso);

/*

*/
/*
$doc = Array
    (
    'hash' => 'f694508cf8ca6d0e55f57e9b465de57e',
    'id' => 1,
    'username' => 'cofran31',
    'fullname' => 'JUAN CARLOS ORTUBE LAHOR',
    'password' => '202cb962ac59075b964b07152d234b70',
    'email' => 'cool3000bo@gmail.com',
    'active' => 1,
    'id_tipo_usuario' => 1
);
 * 
 */


