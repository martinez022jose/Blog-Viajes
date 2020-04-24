<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estiloTurismo.css">
	<title>Principal Usuario</title>
	<?php
	session_start();

	if(!isset($_SESSION['ACTIVO'])){
		header("location:login.php");
	}
    ?>
    <script src="https://kit.fontawesome.com/59dceabbec.js" crossorigin="anonymous"></script>
</head>
<body>
	
	
	<header>
		<div class="headerUsuario">
		    <div class="logo">Logo</div>
		    <div class="referenciaUsuario">
		    	<div><?php echo $_SESSION['rol'];?></div>
		        <div><?php echo "<p class='nombreDeUsuario'>".$_SESSION['nombre']."</p>"; ?> </div>
		        <div id="iconoUsuario" class="far fa-user"></div>
		        <a id="salir" class="fas fa-power-off" href="salir.php"></a>
		    </div>
	    </div>
	</header>

	<section>
		<div class="categorias">
			<a href="#">Perfil</a>
		    <a href="#">Productos</a>
		</div>
	</section>
	<section>
		<h2 class="bienvenida">Bienvenido chique asd</h2>
		
	</section>

</body>
</html>