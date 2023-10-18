<?php
function ordenacionBurbuja($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                // Intercambiar los elementos
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

// Vector de ejemplo con 6 elementos
$vector = [6, 3, 8, 1, 4, 2];

// Imprimir el array desordenado
echo "Array desordenado: ";
foreach ($vector as $element) {
    echo $element . " ";
}
echo "<br>";

// Llamar a la función ordenacionBurbuja para ordenar el array
$vectorOrdenado = ordenacionBurbuja($vector);

// Imprimir el array ordenado
echo "Array ordenado: ";
foreach ($vectorOrdenado as $element) {
    echo $element . " ";
}
echo "<br>";
?>
