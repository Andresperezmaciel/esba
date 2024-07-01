<?php
    include("configadm.php");
    session_start();
    error_reporting(0);

    if(isset($_SESSION['usuario'])) {
        if(isset($_POST['registrar'])){
            $marca = $_POST['marca'];
            $tipo_producto = $_POST['tipo_producto'];
            $descripcion = $_POST['descripcion'];
            $precio = $_POST['precio'];
            $stock_central = $_POST['stock_central'];
            $stock_cordoba = $_POST['stock_cordoba'];
            $stock_rosario = $_POST['stock_rosario'];


            $nombre = $_POST['nombre'];
            $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));


            $query = mysqli_query($conexion,"INSERT INTO producto(id_marca,id_tipo_producto,descripcion,precio,stock_central,stock_cordoba,stock_rosario,imagen) VALUES('$marca','$tipo_producto','$descripcion','$precio','$stock_central','$stock_cordoba','$stock_rosario','$imagen')");
            }
        
        if($query){
            echo "<script>alert('Tipo de producto registrado correctamente!');</script>";
            header("Location:http://localhost/esba-master/admin/altaproducto.php");
        }else{
            echo "<script>alert('¡No pudo registrarse por un problema!');</script>";
            header("Location:http://localhost/esba-master/admin/altaproducto.php");
        }
    }else {
        header("Location:index.php");
        exit;
    }
?>