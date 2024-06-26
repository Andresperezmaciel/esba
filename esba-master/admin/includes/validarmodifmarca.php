<?php
    include("configadm.php");

    session_start();


    if(isset($_SESSION['usuario'])) {

        if(isset($_POST['modif'])){
            $marca = $_POST['marca'];
            $id = $_POST['id'];
             
            $query = mysqli_query($conexion,"UPDATE marca SET nombre = '$marca' WHERE id = '$id' ");

            if($query){
                header("Location:http://localhost/esba-master/admin/marca.php");
                echo "<script>alert('¡Usuario eliminado correctamente!');</script>";
            }else{
                header("Location:http://localhost/esba-master/admin/marca.php");
                echo "<script>alert('¡No pudo eliminarse el usuario por un problema!');</script>";
            }
        }
    }else {
        header("Location:index.php");
        exit;
    }
?>