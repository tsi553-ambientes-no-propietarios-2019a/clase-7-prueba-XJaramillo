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
    <h2>Tienda</h2>
	<h1>Registro de Tienda</h1>

<?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
<?php } ?>
	<img src="https://myslu.slu.edu/res/images/cas-padlock-icon.png" width="100px" height="100px">
	<form action="php/process_registration.php" method="post">
		
        <input type="text" name="Nombre_de_Tienda" placeholder=" Nombre de la tienda " required="required">
        <br><br>
        <input type="text" name="Usuario" placeholder=" Usuario " required="required">
        <br><br>
        <input type="password" name="Clave" placeholder=" Clave " required="required">
        <br><br>
        <input type="password" name="Clave" placeholder=" Repetir Clave " required="required">
        <br><br>
        <button type="submit">Registrar</button>
	</form>
</body>
</html>




                 
           
