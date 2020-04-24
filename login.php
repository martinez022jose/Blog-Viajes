<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="estiloTurismo.css">
	<script src="https://kit.fontawesome.com/59dceabbec.js" crossorigin="anonymous"></script>

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
                    <a href="contacto.php">Contacto</a>
                    <a href="login.php">Login</a>
                </nav>
        </div>
    </header>

    <div class="separador"></div>

	<section>
		  <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" id="formDeLogin">
			
			<div class="cajaInformacion">
				<div class="titulo">Login Here
				</div>
			    <div class="descricion">
			    	Lorem ipsum dolor sit amet, consectetur adipisicing elit
			    </div>
			</div>

			<div class="cajaInputs">
				<?php include("validacionLogin.php");?>
				<label>Usuario: </label><input class="nombreUsuario" type="text" name="nombreUsuario" placeholder="Usuario">
			    <label>Contraseña: </label><input type="password" name="contraseñaUsuario" placeholder="Contraseña">
			    <input id="botonIngresar"type="submit" name="botonIngresar" value="Ingresar">
			</div>

			<div class="cajaDeRedireccionamiento">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
				<a href="registroUsuario.php">Registrase</a>
			</div>
		    
		  </form>

	</section>

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