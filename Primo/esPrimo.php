<?php
function esPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    if ($numero <= 3) {
        return true;
    }

    if ($numero % 2 == 0 || $numero % 3 == 0) {
        return false;
    }

    $i = 5;
    while ($i * $i <= $numero) {
        if ($numero % $i == 0 || $numero % ($i + 2) == 0) {
            return false;
        }
        $i += 6;
    }

    return true;
}

$numeroAleatorio = rand(1, 100); // Genera un número aleatorio entre 1 y 100

echo "Número aleatorio: $numeroAleatorio<br>";

if (esPrimo($numeroAleatorio)) {
    echo "$numeroAleatorio es un número primo.";
} else {
    echo "$numeroAleatorio no es un número primo.";
}
?>
