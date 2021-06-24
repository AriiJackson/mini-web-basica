<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Home</title>
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
        <div class="content">
            <section class="contenido">
				<article id="home">Home</article>
				<article id="certificados">Certificados</article>
			</section>
        </div>
		<div class="footer">
			<?php
				require_once 'footer.php';
			?>
		</div>
	</body>
</html>