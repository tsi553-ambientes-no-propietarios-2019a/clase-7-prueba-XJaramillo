<?php
include('common/utils.php')
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
  
    <form action="php/process_login.php" method="post">
        <h2>Iniciar sesión</h2>
        <input type="text" name="username" placeholder="Usuario">
        <input type="password" name="password" placeholder="Clave">
        <button>Ingresar</button>
    </form>
    <a href="registro_tienda.php">Registrar En Tienda</a>
</body>
</html>
