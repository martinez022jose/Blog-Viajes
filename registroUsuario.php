<!DOCTYPE html>
<html>
<head>
	<title>Registro Usuario</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="estiloTurismo.css">

</head>
<body>
	<section>
		<div class="cajaDeFormRegistrar">
			<form id="formDeUsuario" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
				<div class="cajaInformacion">
					<h1>Registrate</h1>
					<p>Lorem ipsum dolor sit amet</p>
					
				</div>

			    <?php include("validacionRegistroUsuario.php")?>

			    <div class="cajaInputs">

                    <label>Nombre:</label><input type="text" name="nombre" placeholder="Ingrese Nombre">
			        <label>Apellido:</label><input type="text" name="apellido" placeholder="Ingrese Apellido">
			        <label>Usuario:</label><input type="text" name="nombreDeUsuario" placeholder="Ingrese Un Usuario">
			        <label>Contraseña:</label><input type="password" name="contraseña" placeholder="Ingrese Contraseña">
                    <label>Mail:</label><input type="text" name="email" placeholder="Ingrese Mail">
			        <input type="submit" name="submit" id="botonRegistrar" value="Registrar">

			    </div>
			
		    </form>
	    </div>
	</section>

</body>
</html>