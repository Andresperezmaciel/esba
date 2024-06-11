<?php
    include("configadm.php");
    session_start();
    error_reporting(0);

    if(isset($_SESSION['usuario'])) {
        if(isset($_POST['registrar'])){
            $marca = $_POST['marca'];
            $tipo_producto = $_POST['tipo_producto'];

            $query = mysqli_query($conexion,"INSERT INTO tipo_producto(id_marca,nombre) VALUES('$marca','$tipo_producto')");
        }

        if($query){
            echo "<script>alert('Tipo de producto registrado correctamente!');</script>";
            header("Location:http://localhost/esba-master/admin/tipo_producto.php");
        }else{
            echo "<script>alert('¡No pudo registrarse por un problema!');</script>";
            header("Location:http://localhost/esba-master/admin/tipo_producto.php");
        }
    }else {
        header("Location:index.php");
        exit;
    }
?>