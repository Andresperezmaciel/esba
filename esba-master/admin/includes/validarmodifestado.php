<?php
    include("configadm.php");

    session_start();


    if(isset($_SESSION['usuario'])) {

        if(isset($_POST['modif'])){
            $estado = $_POST['estado'];
            $id = $_POST['id'];
             
            $query = mysqli_query($conexion,"UPDATE pedidos SET estado = '$estado' WHERE id = '$id' ");

            if($query){
                header("Location:http://localhost/esba-master/admin/pedidos.php");
                echo "<script>alert('¡Usuario eliminado correctamente!');</script>";
            }else{
                header("Location:http://localhost/esba-master/admin/pedidos.php");
                echo "<script>alert('¡No pudo eliminarse el usuario por un problema!');</script>";
            }
        }
    }else {
        header("Location:index.php");
        exit;
    }
?>