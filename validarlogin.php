<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST["usuario"] ?? '';
    $clave   = $_POST["clave"] ?? '';

    if ($usuario === "die" && $clave === "1234") {
        $_SESSION["usuario"] = $usuario;
        header("Location:index.php");
        exit;
    } else {
        echo "<p style='color:red; text-align:center;'>Usuario o contraseña incorrectos.</p>";
    }
}
?>
