<?php 
date_default_timezone_set('America/Montevideo');
$date = new DateTime('now');
$fecha = $date->format('Y-m-d H:i:s');

$dolar_compra = $_GET['dolar_compra'];
$dolar_venta = $_GET['dolar_venta'];

$euro_compra = $_GET['euro_compra'];
$euro_venta = $_GET['euro_venta'];

$rest = substr($dolar_compra, 0, -3);  // 
$rest2 = substr($dolar_venta, 0, -4);  // 

$rest3 = substr($euro_compra, 0, -4);  // 
$rest4 = substr($euro_venta, 0, -3);  // 

$respuesta = array('fecha'=>$fecha,'dolar_compra'=>$dolar_compra,'dolar_venta'=>$dolar_venta,'euro_compra'=>$euro_compra,'euro_venta'=>$euro_venta);

echo json_encode($respuesta);

/* echo $rest . ' ' . $rest2 . ' ' . $rest3 . ' ' . $rest4 ; */

?>