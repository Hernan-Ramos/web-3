<?php
session_start();
$usuario = $_SESSION["usuario"] ?? null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Inicio</title>
  <style>
    body { font-family: Arial, sans-serif; padding: 2rem; }
    .card { max-width: 300px; margin: auto; padding: 1rem; border: 1px solid #ccc; border-radius: 8px; text-align: center; }
    a { display: inline-block; margin-top: 1rem; padding: .5rem 1rem; background: #2563eb; color: white; text-decoration: none; border-radius: 6px; }
    a:hover { background: #deffa1ff; }
  </style>
</head>
<body>
  <div >
    <?php if ($usuario): ?>
      <h2>Bienvenido, <?= htmlspecialchars($usuario) ?>!</h2>
      <p>Has iniciado sesión correctamente.</p>
      <div>
        <?php include 'autos.php'; ?>

    </div>
      <a href="login.php">Cerrar sesión</a>
    <?php else: ?>
      <h2>Bienvenido</h2>
      <p>Haz clic para iniciar sesión</p>
      <a href="login.php">Ir al formulario</a>
    <?php endif; ?>
  </div>
  
</body>
</html>
