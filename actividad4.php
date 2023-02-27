<?php
/**
 * 
*Descripción del problema
*Imagina que comenzaste a ir al gimnasio y has creado la 
*siguiente rutina de ejercicios que realizarás de lunes a viernes:
    *Lunes: Pecho, Espalda,Hombros
    *Martes: Piernas, Glúteos
    *Miercoles: Bíceps, Espalda, Hombros
    *Jueves: Tríceps,Bíceps
    *Viernes: Piernas, Pantorillas

*Ahora, para que no se te olvide decides escribir un programa que almacene cada rutina 
*y para saber qué ejercicio te toca simplemente debes colocar el nombre del día de 
*la semana y esto te arrojará la rutina a realizar.

*Por ejemplo:

*Lunes: Tienes rutina de Pecho, Espalda y Hombros.
 */

$rutinas = array(

    "Lunes"     => "Pecho, Espalda,Hombros",
    "Martes"    => "Piernas, Glúteos",
    "Miercoles" => "Bíceps, Espalda, Hombros",
    "Jueves"    => "Tríceps,Bíceps",
    "Viernes"   =>"Piernas, Pantorillas"
);

echo "Rutinas diarias del Gym: <br>";
echo "<br> El lunes toca: ". $rutinas['Lunes'] .".";
echo "<br> El Martes toca: ". $rutinas['Martes'] .".";
echo "<br> El Miercoles toca: ". $rutinas['Miercoles'] .".";
echo "<br> El Jueves toca: ". $rutinas['Jueves'] .".";
echo "<br> El Viernes toca: ". $rutinas['Viernes'] .".";

?>