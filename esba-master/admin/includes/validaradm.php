<?php

    // CÓDIGO PARA INICIAR SESIÓN

    //INCLUIMOS LA BASE DE DATOS
    include("configadm.php");
    //TOMAMOS EL USUARIO Y CONTRASEÑA DEL FORM Y LO PONEMOS EN UNA VARIABLE
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['password'];
    //INICIAMOS SESION
    session_start();
    $_SESSION['usuario'] = $usuario;
    //PREPARAMOS LA CONSULTA
    $consulta = "SELECT * FROM adm WHERE user='$usuario' AND passw='$contraseña'";
    //EJECUTAMOS LA CONSULTA
    $resultado = mysqli_query($conexion,$consulta);
    //QUE CUENTE EL RESULTADO
    $filas = mysqli_num_rows($resultado);

    //SI HAY 1 RESULTADO TE LLEVA AL INDEX DEL USUARIO, SI NO HAY 1 RESULTADO, TE DEVUELVE AL LOGIN
    if($filas){
        header("location:http://localhost/esba-master/admin/altausuario.php");
        exit();
    }else{
        header("location:http://localhost/esba-master/admin/index.php");
        exit();
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);

?>