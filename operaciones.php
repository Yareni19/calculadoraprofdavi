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

    //Aqui comienza la operacion de resta
    echo "RESTA - \n";

    $numero1resta = solicitarNumero("Introduce el 1er número: ");

    $numero2resta = solicitarNumero("Introduce el 2do número: ");

    $resta = $numero1resta - $numero2resta;

    echo "La suma de $numero1resta y $numero2resta es: $resta\n";
?>