<?php
    include("configadm.php");
    session_start();
    error_reporting(0);

    if(isset($_SESSION['usuario'])) {
        if(isset($_POST['registrar'])){
            $usuario = $_POST['usuario'];
            $password = $_POST['password'];
            $nombre_empresa = $_POST['nombre_empresa'];
            $direccion = $_POST['direccion'];
            $cuit = $_POST['cuit'];
            $telefono = $_POST['telefono'];
            $mail = $_POST['mail'];

            $query = mysqli_query($conexion,"INSERT INTO users(usuario,contrasena,nombre_empresa,direccion,cuit,telefono,mail) VALUES('$usuario','$password','$nombre_empresa','$direccion','$cuit','$telefono','$mail')");
        }

        if($query){
            echo "<script>alert('¡Usuario registrado correctamente!');</script>";
            header("Location:http://localhost/esba-master/admin/altausuario.php");
        }else{
            echo "<script>alert('¡No pudo registrarse por un problema!');</script>";
            header("Location:http://localhost/esba-master/admin/altausuario.php");
        }
    }else {
        header("Location:index.php");
        exit;
    }
?>