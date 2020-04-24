<?php

//Declaramos variales para la obtencion de los datos
$errores = array();

//Realizamos validaciones

if(isset($_POST['submit'])){

	//Validaciones sobre el nombre
	if(empty($_POST['nombre'])){
		array_push($errores,"<p class='error'>*Error debe ingresar un nombre</p>");
	}else if(strlen($_POST['nombre'])>25){
        array_push($errores,"<p class='error'>*Error debe ingresar un nombre menor a 25 caracteres</p>");
	}

	//Validaciones sobre el apellido
    if(empty($_POST['apellido'])){
		array_push($errores,"<p class='error'>*Error debe ingresar un apellido</p>");
    }else if(strlen($_POST['apellido'])>25){
    	array_push($errores,"<p class='error'>*Error debe ingresar un apellido menor a 25 caracteres</p>");

    }

    //Validaciones sobre el mail
    if(empty($_POST['email'])){
    	array_push($errores,"<p class='error'>*Error debe ingresar un correo</p>");
    }else if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
    	array_push($errores,"<p class='error'>*Error debe ingresar un correo valido</p>");
    }
    
    //Validaciones sobre el mensaje
    if(empty($_POST['mensaje'])){
       array_push($errores,"<p class='error'>*Error debe ingresar un mensaje</p>");
	}

    //Generamos variables para los datos
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

   
   //Recorremos el array errores, si hay errores mostramos errores de datos faltantes, sino enviamos mail
   if(count($errores)>0){
    	for($i=0;$i<count($errores);$i++){
    		echo $errores[$i];
    	}

    }else{
    
    $destinatario = "martinez022jose@gmail.com";
    $asunto = "contacto desde nuestra web";
    $carta = "De: $nombre \n";
    $carta.= "Correo: $email \n";
    $carta.= "Mensaje: $mensaje";
    
    mail($destinatario,$asunto,$carta);

    echo "<script> alert('Mensaje enviado correctamente')</script>";
    }
}

?>