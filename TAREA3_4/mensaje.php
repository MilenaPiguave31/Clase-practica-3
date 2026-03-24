<?php
session_start();


if (!isset($_SESSION['numero'])) {
    $_SESSION['numero'] = rand(1, 10);
    $_SESSION['intentos'] = 0;
}

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = (int) $_POST["numero"];
    $_SESSION['intentos']++;

    if ($usuario == $_SESSION['numero']) {
        $mensaje = "🎉 ¡Correcto! Adivinaste el número en " . $_SESSION['intentos'] . " intentos.";
        session_destroy();
    } elseif ($usuario < $_SESSION['numero']) {
        $mensaje = "🔼 El número es mayor.";
    } else {
        $mensaje = "🔽 El número es menor.";
    }
}
?>
