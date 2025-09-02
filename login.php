<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <style>
    body { font-family: Arial, sans-serif; padding: 2rem; background: #f9fafb; }
    form { max-width: 320px; margin: auto; padding: 1rem; border: 1px solid #ddd; border-radius: 8px; background: white; display: grid; gap: .75rem; }
    label { font-weight: bold; }
    input { padding: .5rem; border: 1px solid #ccc; border-radius: 6px; }
    button { padding: .6rem; background: #df6ff1ff; color: white; border: none; border-radius: 6px; cursor: pointer; }
    button:hover { background: #7b14a4ff; }
    .error { color: red; text-align: center; margin-bottom: 1rem; }
  </style>
</head>
<body>

<?php if (isset($_GET['error'])): ?>
  <div class="error">Usuario o contraseña incorrectos.</div>
<?php endif; ?>
<center><img src="img/user.png.png" alt="" width="200px" height="200px"></center>
<form method="post" action="validarlogin.php">
  <label for="usuario">Usuario:</label>
  <input type="text" name="usuario" id="usuario" required>

  <label for="clave">Contraseña:</label>
  <input type="password" name="clave" id="clave" required>

  <button type="submit">Entrar</button>
</form>

</body>
</html>
