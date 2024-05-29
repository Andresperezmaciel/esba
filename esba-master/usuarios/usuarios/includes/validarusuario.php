<?php

    // CÓDIGO PARA INICIAR SESIÓN

    //INCLUIMOS LA BASE DE DATOS
    include("configuser.php");
    //TOMAMOS EL USUARIO Y CONTRASEÑA DEL FORM Y LO PONEMOS EN UNA VARIABLE
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['password'];
    //INICIAMOS SESION
    session_start();
    $_SESSION['usuario'] = $usuario;
    //PREPARAMOS LA CONSULTA
    $consulta = "SELECT * FROM users WHERE usuario='$usuario' AND contrasena='$contrasena'";
    //EJECUTAMOS LA CONSULTA
    $resultado = mysqli_query($conexion,$consulta);
    //QUE CUENTE EL RESULTADO
    $filas = mysqli_num_rows($resultado);

    //SI HAY 1 RESULTADO TE LLEVA AL INDEX DEL USUARIO, SI NO HAY 1 RESULTADO, TE DEVUELVE AL LOGIN
    if($filas){
        header("location:http://localhost/esba-master/usuarios/index.php");
        exit();
    }else{
        header("location:http://localhost/esba-master/login.php");
        exit();
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);

?>