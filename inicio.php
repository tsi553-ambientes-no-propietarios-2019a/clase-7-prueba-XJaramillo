<?php 
include('common/utils.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
</head>
<body>
	<h1>Bienvenido <?php echo $_SESSION['username']['Usuario']; ?>
    </h1>
    <br>
    <h2>Nombre Tienda: <?php echo $_SESSION['name']['Nombre_de_Tienda']; ?>
    </h2>
    <h3>Productos</h3>
    
    <div><a href="nuevo_producto.php">Registrar Nuevo producto</a>
    </div>
	<div><a href="php/logout.php">Cerrar sesion</a></div>
</body>
</html>