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

    //Aqui inicia la operacion de multiplicacion
    $numero1multi = solicitarNumero("Introduce el primer número: ");

    $numero2multi = solicitarNumero("Introduce el segundo número: ");

    $multi = $numero1multi * $numero2multi;

    echo "La suma de $numero1multi y $numero2multi es: $multi\n";
?>