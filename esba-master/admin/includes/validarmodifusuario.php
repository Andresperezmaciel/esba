<?php
    include("configadm.php");

    session_start();


    if(isset($_SESSION['usuario'])) {

        if(isset($_POST['modificar'])){
            $usuario = $_POST['usuario'];
            $password = $_POST['password'];
            $nombre_empresa = $_POST['nombre_empresa'];
            $direccion = $_POST['direccion'];
            $cuit = $_POST['cuit'];
            $telefono = $_POST['telefono'];
            $mail = $_POST['mail'];
            $id = $_POST['id'];

                $query = mysqli_query($conexion,"UPDATE users SET usuario = '$usuario', contrasena = '$password', nombre_empresa = '$nombre_empresa', direccion = '$direccion', cuit = '$cuit', telefono = '$telefono', mail = '$mail' WHERE id = '$id' ");

            if($query){
                header("Location:http://localhost/esba-master/admin/bajaymodifusuario.php");
                echo "<script>alert('¡Usuario eliminado correctamente!');</script>";
            }else{
                header("Location:http://localhost/esba-master/admin/bajaymodifusuario.php");
                echo "<script>alert('¡No pudo eliminarse el usuario por un problema!');</script>";
            }
        }
    }else {
        header("Location:index.php");
        exit;
    }
?>