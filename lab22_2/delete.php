<?php
    session_start();
    require_once("modelo.php");
    if(isset($_SESSION["usuario"]) ) {
        $user = $_SESSION["usuario"];
        deleteProducto($_GET["q"]);
        header("location:login.php");
    } else {
        header("location:index.php");
    }
?>
