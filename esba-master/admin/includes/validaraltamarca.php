<?php
    include("configadm.php");
    session_start();
    error_reporting(0);

    if(isset($_SESSION['usuario'])) {
        if(isset($_POST['registrar'])){
            $marca = $_POST['marca'];

            $query = mysqli_query($conexion,"INSERT INTO marca(nombre) VALUES('$marca')");
        }

        if($query){
            echo "<script>alert('Marca registrada correctamente!');</script>";
            header("Location:http://localhost/esba-master/admin/marca.php");
        }else{
            echo "<script>alert('¡No pudo registrarse por un problema!');</script>";
            header("Location:http://localhost/esba-master/admin/marca.php");
        }
    }else {
        header("Location:index.php");
        exit;
    }
?>