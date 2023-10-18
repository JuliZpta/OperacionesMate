<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];

    // Crear una cadena de texto con los datos a guardar
    $datos = "Nombre: $nombre\nApellido: $apellido\nEdad: $edad\n";

    // Ruta del archivo de texto donde se guardarán los datos
    $archivo = 'datos_personales.txt';

    // Abre el archivo para escritura
    $handle = fopen($archivo, 'a');

    if ($handle === false) {
        echo "Error al abrir el archivo.";
    } else {
        // Escribe los datos en el archivo
        if (fwrite($handle, $datos) !== false) {
            echo "Datos guardados correctamente en el Archivo.";
        } else {
            echo "Error al guardar los datos.";
        }

        // Cierra el archivo
        fclose($handle);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Datos Personales</title>
</head>
<body>
    <h2>Ingrese sus Datos Personales</h2>
    <form action="x.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" required>
        <br>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" required>
        <br>

        <input type="submit" value="Guardar Datos">
    </form>
</body>
</html>
