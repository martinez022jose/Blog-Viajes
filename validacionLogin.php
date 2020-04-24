<?php
include ("conexion.php");

$errores = Array();

session_start();

if(isset($_SESSION['ACTIVO'])){
    header("location:principalUsuario.php");
}else{
    
    if(isset($_POST['botonIngresar'])){

       if(empty($_POST['nombreUsuario']) || empty($_POST['contraseñaUsuario'])){
        array_push($errores,"<p class='error'>* Debe completar todos los campos </p>");
       }else{

    $usuario = mysqli_real_escape_string($conexion,$_POST['nombreUsuario']);
    $contraseña = md5(mysqli_real_escape_string($conexion,$_POST['contraseñaUsuario']));


    $query = "SELECT *FROM usuario WHERE USUARIO ='$usuario' AND CONTRASEÑA ='$contraseña'";
    $resultado = mysqli_query($conexion,$query);

    $filas = mysqli_num_rows($resultado);

    if($filas>0){
        
        $informacion = mysqli_fetch_array($resultado);
        
        $_SESSION['ACTIVO'] = true;
        $_SESSION['nombre'] = $informacion['NOMBRE'];
        $_SESSION['apellido'] = $informacion['APELLIDO'];
        $_SESSION['usuario'] = $informacion['USUARIO'];
        $_SESSION['contraseña'] = $informacion['CONTRASEÑA'];
        $_SESSION['email'] = $informacion['EMAIL'];
        $_SESSION['rol'] = $informacion['ROL'];

        header("location:principalUsuario.php");
    }else{
        array_push($errores,"<p class='error'> *No hay coincidencia de usuario</p>");
        session_destroy();
    }

    }

    if($errores>0){
        for($i=0;$i<count($errores);$i++){
            echo $errores[$i];
        }
    }

    //mysqli_free_result($resultado);
    
}

}

//mysqli_close($conexion);






?>