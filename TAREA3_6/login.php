<?php
session_start();

$usuarios = [
    "admin" => "1234",
    "mile" => "a123"
];
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["usuario"];
    $pass = $_POST["password"];

    // Verificar si el usuario existe y la contraseña es correcta
    if (isset($usuarios[$user]) && $usuarios[$user] == $pass) {
        $_SESSION["usuario"] = $user;   // Guardar usuario en sesión
        header("Location: panel.php");   // Redirigir al panel
        exit();
    } else {
        $error = "Usuario o contraseña incorrectos";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <?php if ($error): ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="post" action="">
            <label>Usuario:</label>
            <input type="text" name="usuario" required><br>
            <label>Contraseña:</label>
            <input type="password" name="password" required><br>
            <button type="submit">Ingresar</button>
        </form>
    </div>
</body>
</html>