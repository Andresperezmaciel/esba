<?php
    include("configadm.php");

    session_start();
    error_reporting(0);

    if(isset($_SESSION['usuario'])) {

        if(isset($_POST['modif'])){
            $marca = $_POST['marca'];
            $tipo_producto = $_POST['tipo_producto'];
            $id = $_POST['id'];
             
            $query = mysqli_query($conexion,"UPDATE tipo_producto SET id_marca = '$marca', nombre = '$tipo_producto' WHERE id = '$id' ");

            if($query){
                header("Location:http://localhost/esba-master/admin/tipo_producto.php");
                echo "<script>alert('¡Usuario eliminado correctamente!');</script>";
            }else{
                header("Location:http://localhost/esba-master/admin/tipo_producto.php");
                echo "<script>alert('¡No pudo eliminarse el usuario por un problema!');</script>";
            }
        }
    }else {
        header("Location:index.php");
        exit;
    }
?>