<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


include_once 'includes/autoload.php';

//use pago\TarjetaCreditoPago;
use pago\PayPalPago as PayPal;
use model\Compra;

$fecha = new DateTime("2024/12/23");

$metodoPago = new \pago\TarjetaCreditoPago("Ana Antas López", "1234567812345678", 123, $fecha);
$compra = new Compra(120.55, $metodoPago);
$compra->comprar();
echo ($metodoPago);

echo "------------------------<br/>";
$metodoPago = new PayPal("ana@email.com", "abc123.");
$compra->setMetodoPago($metodoPago);
$compra->comprar();

echo ($metodoPago);
