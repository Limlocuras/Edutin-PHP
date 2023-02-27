<?php


/**
 * Descripción del problema
*Se acercan las próximas elecciones estudiantiles en la universidad y te piden realizar un programa para verificar
*si un estudiante puede o no votar. Ten en cuenta que:

*   -Debes usar una función con parámetros.
*   -El estudiante debe tener mínimo 18 para votar.

*Por último, en un comentario multilínea coloca el resultado de verificar si los siguientes estudiantes pueden votar:

*Ashley: 14 años
*Luis Camilo: 20 años
*Fernando: 16 años
*Jorge: 22 años
 */

 function separador(){

    echo "************************************************<br>";
 }


function check_vote ($nombre, $edad){

    $años = 18 - $edad;

   if ($edad >= 18 ) {
    echo $nombre." tienes ".$edad." años, puedes votar <br>";
    separador();
   }else{
    echo $nombre." tienes ".$edad." años, NO puedes votar todavia,
    te quedan aun ". $años." años para poder votar <br>";
    separador();
   }

}


check_vote("Ashley",14);
check_vote("Luis Camilo",20);
check_vote("Fernando",16);
check_vote("Jorge",22);


/**RESULTADOS:
Ashley tienes 14 años, NO puedes votar todavia, te quedan aun 4 años para poder votar
************************************************
Luis Camilo tienes 20 años, puedes votar
************************************************
Fernando tienes 16 años, NO puedes votar todavia, te quedan aun 2 años para poder votar
************************************************
Jorge tienes 22 años, puedes votar
************************************************
 */

?>