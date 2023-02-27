<?php
/**
* Descripción del problema:
*Imagina que te encuentras en la clase de lógica matemática y el tema que estás viendo es “factorial”, 
*para calcular el factorial de un número se deben multiplicar todos los números enteros y 
*positivos que hay entre el número que aparece en la fórmula y el número 1.

*Por ejemplo: si tienes el número 7, su factorial sería: 
*7! = 1 * 2 * 3 * 4 * 5 * 6 * 7 = 5.040

*Teniendo claro esto, te piden que escribas un programa que calcule el factorial de los siguientes números: 5, 10, 15 y 20. 
*El resultado debes colocarlo en un comentario multilineas. 
 * 
 */



$numero = 20;
$factorial = 1;

for ($i=1; $i <= $numero ; $i++) { 
    $factorial = $factorial * $i;
}

echo "El factorial de ".$numero. " es: ". $factorial . '.<br>';

/********************************************** */
/*RESUTALDOS

El factorial de 5 es: 120.

El factorial de 10 es: 3628800.

El factorial de 15 es: 1307674368000.

El factorial de 20 es: 2432902008176640000.


*/


?>