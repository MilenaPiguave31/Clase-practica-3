
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = htmlspecialchars($_POST["nombre"]);
    $correo = htmlspecialchars($_POST["correo"]);
    $mensaje = htmlspecialchars($_POST["mensaje"]);

    if (empty($nombre) || empty($correo) || empty($mensaje)) {
        echo "Todos los campos son obligatorios.";
        exit;
    }

    echo "<h2>Datos recibidos:</h2>";
    echo "Nombre: " . $nombre . "<br>";
    echo "Correo: " . $correo . "<br>";
    echo "Mensaje: " . $mensaje . "<br>";
}
?>