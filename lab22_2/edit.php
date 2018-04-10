<?php
    session_start();
    require_once("modelo.php");
    if(isset($_SESSION["usuario"]) ) {
        $user = $_SESSION["usuario"];
        $producto = getProductoRow($_GET["q"]);
        include("partials/_edit_form.html");
    } else {
        header("location:index.php");
    }
?>
