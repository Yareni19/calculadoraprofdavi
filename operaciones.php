<?php
    echo "Hola Mundo ^o^"
    echo "_Yareni Ramos_"

    function solicitarNumero($mensaje) {
        echo $mensaje;
        $handle = fopen("php://stdin", "r");
        $numero = trim(fgets($handle));
        if (!is_numeric($numero)) {
            echo "Por favor, introduce un número válido.\n";
            return solicitarNumero($mensaje);
        }
        return $numero;
    }

    $numero1 = solicitarNumero("Introduce el primer número: ");

    $numero2 = solicitarNumero("Introduce el segundo número: ");

    $suma = $numero1 + $numero2;

    echo "La suma de $numero1 y $numero2 es: $suma\n";

    
    //Aqui va la resta 
    echo "La Resta es: \n";

    $numero1resta = solicitarNumero("Introduce el primer número: ");

    $numero2resta = solicitarNumero("Introduce el segundo número: ");

    $resta = $numero1resta - $numero2resta;

    echo "La suma de $numero1resta y $numero2resta es: $resta\n";


    //Aqui va la multiplicacion 
    echo "La Multiplicacion es:\n";

    $numero1multi = solicitarNumero("Introduce el primer número: ");

    $numero2multi = solicitarNumero("Introduce el segundo número: ");

    $multi = $numero1multi * $numero2multi;

    echo "La suma de $numero1multi y $numero2multi es: $multi\n";


    //Aqui inicia la division
    echo "La Division es:\n";

    $numero1devi = solicitarNumero("Introduce el primer número: ");

    $numero2devi = solicitarNumero("Introduce el segundo número: ");

    $division = $numero1devi / $numero2devi;

    echo "La division de $numero1devi y $numero2devi es: $division\n";
?>