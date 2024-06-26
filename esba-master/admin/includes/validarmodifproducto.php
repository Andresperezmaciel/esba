<?php
    include("configadm.php");

    session_start();


    if(isset($_SESSION['usuario'])) {

        if(isset($_POST['modificar'])){
            $descripcion = $_POST['descripcion'];
            $precio = $_POST['precio'];
            $stock_central = $_POST['stock_central'];
            $stock_cordoba = $_POST['stock_cordoba'];
            $stock_rosario = $_POST['stock_rosario'];
            $id = $_POST['id'];

                $query = mysqli_query($conexion,"UPDATE producto SET descripcion = '$descripcion', precio = '$precio', stock_central = '$stock_central', stock_cordoba = '$stock_cordoba', stock_rosario = '$stock_rosario' WHERE id = '$id' ");

            if($query){
                header("Location:http://localhost/esba-master/admin/bajaymodifproducto.php");
                echo "<script>alert('¡Usuario eliminado correctamente!');</script>";
            }else{
                header("Location:http://localhost/esba-master/admin/bajaymodifproducto.php");
                echo "<script>alert('¡No pudo eliminarse el usuario por un problema!');</script>";
            }
        }
    }else {
        header("Location:index.php");
        exit;
    }
?>