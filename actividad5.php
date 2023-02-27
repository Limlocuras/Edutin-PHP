<?php


//Separador para mostrar datos ordenados
function separador(){

    echo "********************************************************************************** <br>";
}


// Clase padre ** Persona**
class Persona {

    public $nombre;
    public $edad;


    public function __construct($nombre,$edad)
    {
        $this -> nombre = $nombre;
        $this -> edad = $edad;
    }

    //Muestra datos personales cliente
    public function imprimirDatos (){
        separador();
        echo "<br>".$this->nombre . " tiene: " . $this->edad . " años. <br>";
    }
}

// Clase hija **Persona**
class Ciudadano extends Persona{

    public $deposito;

    public function __construct($nombre,$edad,$deposito)
    {
        parent::__construct($nombre,$edad);
        $this -> deposito = $deposito;
    }

    //Muestra el saldo de cada cliente
    public function imprimirSaldo(){

        echo $this->nombre . " tiene un saldo acumulado de: " . $this->deposito . "$. <br>";
    }

    //Calculo si el cliente es exento de pagar impuestos
    public function impuestos() {

        if ($this -> deposito > 3000) {
            
            echo "**Lamentablemente le informamos que supera la 
                  cantidad máxima de 3000$, usted deberá abonar<br>
                  los impuestos establecidos por las leyes económicas
                 de este país.<br> ";
                 separador();
        }else{

            echo "**Su saldo se encuetra exento de impuestos. <br>";
            separador();
        }
    }
}


$ciudadano = new Ciudadano("Mariano",25,5700);
$ciudadano -> imprimirDatos();
$ciudadano -> imprimirSaldo();
$ciudadano -> impuestos();

$ciudadano1 = new Ciudadano("Leonel",56,3500);
$ciudadano1 -> imprimirDatos();
$ciudadano1 -> imprimirSaldo();
$ciudadano1 -> impuestos();

$ciudadano2 = new Ciudadano("Yaneth",34,8400);
$ciudadano2 -> imprimirDatos();
$ciudadano2 -> imprimirSaldo();
$ciudadano2 -> impuestos();

$ciudadano3 = new Ciudadano("Martin",45,2500);
$ciudadano3 -> imprimirDatos();
$ciudadano3 -> imprimirSaldo();
$ciudadano3 -> impuestos();

?>