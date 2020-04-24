<!DOCTYPE html>
<html>
<head>
	<title>Proyecto Viajes</title>
    <script src="https://kit.fontawesome.com/59dceabbec.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="estiloTurismo.css">
</head>
<body>
	 <header>
        <div class="contenedor">
                <h1 class="fas fa-plane-departure">Travel Blog</h1>
                <input type="checkbox" id="checkMenu">
                <label class="fas fa-bars" for="checkMenu"></label>
                <nav class="menu">
                    <a href="index.html">Inicio</a>
                    <a href="index.html">Destacados</a>
                    <a href="index.html">Experiencias</a>
                    <a href="#">Contacto</a>
                    <a href="login.php">Login</a>
                </nav>
        </div>
    </header>

	<div class="separador"></div>

	<section id="contacto">
		<div class="cajaContacto">
		  
		  <div class="cajaLogo">
			<div class="descripcion">
				<h1>Formulario de contacto</h1>
				<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</h2>
				
			</div>
			<div id="logoContacto" class="fas fa-address-card"></div>
		    </div>

		  <div class="form">
			<div class="cajaFormulario">
			
			<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" 
				class="formulario">

				
                <?php
		          include("validacionEnvioMail.php");
		        ?>

                <div class="item">
					<label>Nombre/s:</label>
				    <input class="input" type="text" name="nombre"  placeholder="Ingrese Nombre" value="<?php if(isset($nombre)){ echo $nombre;} ?>">
				</div>
				<div class="item">
					<label>Apellido/s:</label>
				    <input class="input" type="text" name="apellido"  placeholder="Ingrese Apellido" value="<?php if(isset($apellido)){ echo $apellido;} ?>">
				</div>
				<div class="item">
					<label>Email:</label>
				    <input class="input" type="text" name="email"  placeholder="Ingrese Mail" value="<?php if(isset($email)){ echo $email;} ?>">
				</div>
				<div class="item">
					<textarea name="mensaje"  placeholder="Ingrese Texto" 
					value="<?phpif(isset($mensaje)){ echo $mensaje;} ?>"></textarea>
				</div>
				<div class="item">
					<input id="button" type="submit" name="submit"></button>
				</div>

			</form>
		   </div>
		</div>
	</div>
	</section>

	<div class="separador"></div>

	<footer>
        <div class="cajaInfo">
            <p>Trevel Blog &copy </p>
            <div class="cajaIconos">
                <a class="fab fa-twitter-square" href="#"></a>
                <a class="fab fa-facebook-square" href="#"></a>
                <a class="fab fa-instagram-square" href="#"></a>
            </div>
            
        </div>
    </footer>

</body>
</html>