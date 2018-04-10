<?php
    session_start();
    require_once("modelo.php");
    if(isset($_SESSION["usuario"]) ) {
        $user = $_SESSION["usuario"];
        editProducto($_POST["id"],$_POST["producto"],$_POST["descripcion"]);
        header("location:index.php");
    } else {
        header("location:index.php");
    }
?>
