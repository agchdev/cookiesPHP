<?php
require_once("./inc/conexion.php");
if(isset($_POST['enviar'])){
    $nombre = $_POST['username'];
    $password = $_POST['password'];
    $sesion = false;
    $consulta = "SELECT * FROM usuarios WHERE usuario = '$nombre' AND password = '$password'";
    $sentencia = $conexion->prepare($consulta);
    $sentencia->execute();
    $sentencia->store_result();
    if($sentencia->num_rows > 0){
        $sesion = true;
    }
    
    if($sesion){
        /* GUARDAR USUARIO EN LA COOKIE */
        $cookie_name = "user";
        $cookie_value = $nombre;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        $cookie_name = "password";
        $cookie_value = $password;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        header("Location: index.php");
    }else{
        header("Location: login.php");
    }
}
?>