<?php


function validarEspaciosEnBlanco(){
  if(empty($_POST['nombre']) || empty($_POST['apellido']) || empty( $_POST['email']) || empty($_POST['mensaje'])){
    return true;
  }
  return false;

}

if(validarEspaciosEnBlanco()){
  echo "<p class='error'>Debe completar todos los campos</p>";
}else if(strlen($_POST['nombre'])>25){
    echo "<p class='error'>Error debe ingresar un nombre menor a 25 caracteres</p>";
    }else if(strlen($_POST['apellido'])>25){
      echo "<p class='error'>*Error debe ingresar un apellido menor a 25 caracteres</p>";

    }else if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
      echo "<p class='error'>*Error debe ingresar un correo valido</p>";
    }
else{
      $nombre = $_POST['nombre'];
      $apellido = $_POST['apellido'];
      $email = $_POST['email'];
      $mensaje = $_POST['mensaje'];
      
      $destinatario = "martinez022jose@gmail.com";
      $asunto = "contacto desde nuestra web";
      $carta = "De: $nombre \n";
      $carta.= "Correo: $email \n";
      $carta.= "Mensaje: $mensaje";

     mail($destinatario,$asunto,$carta);

     echo "<p class='mensajeExitoso'>Mail enviado exitosamente</p>";

    }

?>