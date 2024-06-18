<?php
session_start();
error_reporting(0);

if (isset($_SESSION['usuario'])) {
    session_destroy();
}
header("Location:index.php");
exit;
?>