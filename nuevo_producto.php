<?php 
if($_GET) {
	if(isset($_GET['error_message'])) {
		$error_message = $_GET['error_message'];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
</head>
<body>
    <h2>TiendasEC</h2>
	<h1>Registro de producto</h1>

<?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
<?php } ?>
	<form action="php/process_registration_producto.php" method="post">
		<input type="text" name="Codigo">
        <input type="text"
        name="Nombre">
        <select name="Tipo">
  <option value="Alimento">Alimento</option> 
  <option value="Vestimenta" selected>Vestimenta</option>
  <option value="Salud">Salud</option>
</select>
        <input type="text" name="CantidadS">
        <input type="text" name="Precio">
		<button>Registrar</button>
	</form>
</body>
</html>