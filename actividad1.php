<?php


/*

--Descripción del problema--
Imagine que la tienda donde usted trabaja ofrece descuentos a los clientes en navidad, 
de acuerdo con el monto de su compra. El criterio para establecer el descuento se muestra a continuación:

************************************************************
Porcentaje de descuento

Si es menor a 50 = 5%

Si es mayor o igual a 50 y menor que 100 = 10%

Si es mayor o igual a 100 y menor o igual a 250 = 15%

Si es mayor a 250 y menor a 400 = 20%
************************************************************

Teniendo en cuenta la tabla, te piden que escribas un programa que solicite el nombre del cliente 
y el valor de la compra. Y que arroje como resultado: 

- Nombre del cliente
- Valor de la compra sin descuento
- Valor de la compra con descuento
 

Recuerde que para calcular el descuento primero debe multiplicar el valor de la compra por el porcentaje. 
Luego, debe restar el valor obtenido al valor de la compra y con eso obtiene el precio con descuento.

descuento = valor_compra x porcentaje
precio final = valor_compra - descuento


*/

$nombre_cliente = "Eva Castro";
$consumo_cliente = 350;

if ($consumo_cliente < 50) {
    $descuento = 5;
}elseif ($consumo_cliente >= 50 && $consumo_cliente < 100) {
    $descuento = 10;
}elseif ($consumo_cliente >= 100 && $consumo_cliente <= 250) {
    $descuento = 15;
}elseif ($consumo_cliente > 250 && $consumo_cliente < 400) {
    $descuento = 20;
} else {
    $descuento = 20;
}

$total_descuento = $consumo_cliente * ($descuento/100);
$precio_final = $consumo_cliente - $total_descuento;


echo "Cliente: " . $nombre_cliente . 
    "<br> Valor compra antes de descuento:  " . $consumo_cliente .
    "$ <br> Se aplica un descuento de ".
    $descuento. "% <br> Valor descuento: ".
    $total_descuento. "$. <br> Total a Pagar:    ".
    $precio_final . "$ ";

/**
 * Juan Pablo realizó una compra de 55 usd:
 * Respuesta:
    Cliente: Juan Pablo
    Valor compra antes de descuento: 55$
    Se aplica un descuento de 10%
    Valor descuento: 5.5$.
    Total a Pagar: 49.5$
 
 * Kenia Ortiz realizó una compra de 120 usd:
 * Respuesta:
    Cliente: Kenia Ortiz
    Valor compra antes de descuento: 120$
    Se aplica un descuento de 15%
    Valor descuento: 18$.
    Total a Pagar: 102$

* Angie Andrade realizó una compra de 275usd:
* Respuesta:
    Cliente: Angie Andrade
    Valor compra antes de descuento: 275$
    Se aplica un descuento de 20%
    Valor descuento: 55$.
    Total a Pagar: 220$

* Eva Castro realizó una compra de 350usd:
* Respuesta:
    Cliente: Eva Castro
    Valor compra antes de descuento: 350$
    Se aplica un descuento de 20%
    Valor descuento: 70$.
    Total a Pagar: 280$

 */

?>