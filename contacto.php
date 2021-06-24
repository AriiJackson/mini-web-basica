<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Contacto</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="header">
			<?php
                require_once 'nav.php'; 
            ?>
		</div>
		<form action="contacto.php" method="post">
			<input type="text" name="name" placeholder="Nombre y Apellido">
			<input type="text" name="dni" placeholder="Numero de Documento">
			<input type="text" name="phone" placeholder="Telefono">
			<input type="text" name="email" placeholder="Email">
			<input type="submit" value="Enviar" name="send">
		</form>
		<div class="footer">
			<?php
				require_once 'footer.php';
			?>
		</div>
	</body>
</html>

<?php 
	if(isset($_POST['send'])){
		include("conexion_db.php");

		$name = $_POST['name'];
		$dni = $_POST['dni']; 
		$phone = $_POST['phone']; 
		$email = $_POST['email'];

		if(mysqli_query($conexion, "INSERT INTO contacto (contacto_name,contacto_dni,contacto_phone,contacto_email) values ('$name','$dni','$phone','$email')")) {
			echo "Los datos se insertaron correctamente.";
		}
		else{
			echo "Hubo un error";
		}
	}
	mysqli_close($conexion);
?>