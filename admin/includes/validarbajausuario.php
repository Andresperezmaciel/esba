<?php
    include("configadm.php");

    session_start();


    if(isset($_SESSION['usuario'])) {
        if(isset($_POST['baja'])){
            $query = mysqli_query($conexion,"DELETE FROM users WHERE id = '".$_GET['id']."'");
        }

        if($query){
            echo "<script>alert('¡Usuario eliminado correctamente!');</script>";
        }else{
            echo "<script>alert('¡No pudo eliminarse el usuario por un problema!');</script>";
        }
    }else {
        header("Location:index.php");
        exit;
    }
?>