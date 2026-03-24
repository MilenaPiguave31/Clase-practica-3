<?php

$archivo = "contador.txt";


if (!file_exists($archivo)) {
    file_put_contents($archivo, 0);
}


$visitas = (int) file_get_contents($archivo);


$visitas++;


file_put_contents($archivo, $visitas);
?>
<?php
// Archivo donde se guarda el contador
$archivo = "contador.txt";

// Verificar si existe el archivo
if (!file_exists($archivo)) {
    file_put_contents($archivo, 0);
}

// Leer el número actual de visitas
$visitas = (int) file_get_contents($archivo);

// Incrementar visitas
$visitas++;

// Guardar el nuevo valor
file_put_contents($archivo, $visitas);
?>
