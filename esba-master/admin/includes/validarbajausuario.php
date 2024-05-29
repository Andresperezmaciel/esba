<?php
    include("configadm.php");

    session_start();


    if(isset($_SESSION['usuario'])) {

        $id = $_GET['id'];

            $query = mysqli_query($conexion,"DELETE FROM users WHERE id = '$id'");

        if($query){
            header("Location:http://localhost/esba-master/admin/bajaymodifusuario.php");
            echo "<script>alert('¡Usuario eliminado correctamente!');</script>";
        }else{
            header("Location:http://localhost/esba-master/admin/bajaymodifusuario.php");
            echo "<script>alert('¡No pudo eliminarse el usuario por un problema!');</script>";
        }
    }else {
        header("Location:index.php");
        exit;
    }
?>