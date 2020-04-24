<?php 
  include ("conexion.php");
  
  $errores = Array();
  $mensajeExitoso = Array();
   
  if(isset($_POST['submit'])){

    if(empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['contraseña']) || empty($_POST['email']) || empty($_POST['nombreDeUsuario'])){

  	  array_push($errores,"<p class='error'>*Los campos deben estar completos </p>");
    
    }else{

  		   $nombre = $_POST['nombre'];
         $apellido = $_POST['apellido'];
         $user = $_POST['nombreDeUsuario'];
         $contraseña = md5($_POST['contraseña']);
         $email = $_POST['email'];


         $query = mysqli_query($conexion, "SELECT *FROM usuario WHERE USUARIO = '$user' OR EMAIL = '$email'");

         $resultado = mysqli_fetch_array($query);

         if($resultado > 0){
         	  array_push($errores,"<p class='error'>*El usuario o el mail ya estan registrados </p>");
         }else{
         	$queryInsert = mysqli_query($conexion,"INSERT INTO USUARIO(NOMBRE,APELLIDO,USUARIO,CONTRASEÑA,EMAIL ) VALUES('$nombre','$apellido','$user','$contraseña','$email')");
         	if($queryInsert){
         		array_push($mensajeExitoso,"<p class='mensajeExitoso'>Se ha creado usuario exitosamente</p>");
         	}else{
         		array_push($errores,"<p class='error'>*No se ha podido registrar usuario</p>");

         	}
         }
       } 
     }

  if($errores>0){
    for($i=0;$i<count($errores);$i++){
       echo $errores[$i];
    }
  }

  if($mensajeExitoso>0){
    for($i=0;$i<count($mensajeExitoso);$i++){
       echo $mensajeExitoso[$i];
    }
  }





 ?>    
