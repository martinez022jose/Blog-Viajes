<?php
function validarEspaciosEnBlanco(){
    if(empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['email']) || empty($_POST['mensaje'])){
        return true;
    }
    return false;
    
}

function obtenerValores(&$nombre,&$apellido,&$email,&$mensaje){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
}

function recorrerElementos($elementos){
    for($i=0;$i<count($elementos);$i++){
        echo $elementos[$i];
    }
}

$errores = Array();
$mensajeExitoso = Array();
$nombre="";
$apellido="";
$email="";
$mensaje="";

obtenerValores($nombre,$apellido,$email,$mensaje);

if(validarEspaciosEnBlanco()){
        array_push($errores,"<p class='error'>Se debe completar todos los campos</p>");
        
}else{
    if(strlen($nombre)>25){
        array_push($errores,"<p class='error'>Error debe ingresar un nombre menor a 25 caracteres</p>");
        }
    if(strlen($apellido)>25){
        array_push($errores,"<p class='error'>Error debe ingresar un apellido menor a 25 caracteres</p>");
        }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        array_push($errores,"<p class='error'>Error debe ingresar un correo valido</p>");
}}



    $destinatario = "martinez022jose@gmail.com";
    $asunto = "contacto desde nuestra web";
    $carta = "De:".$nombre;
    $carta.= "Correo".$email;
    $carta.= "Mensaje:".$mensaje;

   //Verificamos si hubo errores

   if(count($errores)>0){
        recorrerElementos($errores);
        

    }else{
        array_push($mensajeExitoso,"<p class='mensajeExitoso'>Mensaje enviado exitosamente</p>");}

    if(count($mensajeExitoso)>0){
        recorrerElementos($mensajeExitoso);
        mail($destinatario,$asunto,$carta);
    

    }

?>