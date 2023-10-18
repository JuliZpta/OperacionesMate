<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $preciohora = floatval($_POST['valorhora']);
    $horastrabajadas = floatval($_POST['horastraba']);
    $deduccion = $_POST['deduccion'];

    $salario = $preciohora * $horastrabajadas;
    $descuento = 0;

    if ($deduccion === "ninios") {
        $descuento = ($salario * 5) / 100;
    } elseif ($deduccion === "abuelos") {
        $descuento = ($salario * 7) / 100;
    } elseif ($deduccion === "incapacitados") {
        $descuento = ($salario * 3) / 100;
    }

    $salarioneto = $salario - $descuento;

    echo "Nombre del trabajador: $nombre<br>";
    echo "Salario a pagar: $salario<br>";
    echo "Descuento aplicado: $descuento<br>";
    echo "Salario neto: $salarioneto<br>";
}
?>
