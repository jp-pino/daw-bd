<?php
    session_start();

    if(isset($_SESSION["usuario"]) ) {
        include("partials/_header.html");
        $user = $_SESSION["usuario"];
        include("partials/_tienda_view.html");
        include("partials/_footer.html");
    }else if ($_POST["usuario"]=="juanpi96" && $_POST["password"]=="1234" ) {
        unset($_SESSION["error"]);
        $_SESSION["usuario"] = $_POST["usuario"];
        $user = $_SESSION["usuario"];
        include("partials/_header.html");
        include("partials/_tienda_view.html");
        include("partials/_footer.html");
    } else if($_POST["usuario"]!="juanpi96" || $_POST["password"]!="1234") {
        $_SESSION["error"] = "Usuario y/o contraseña incorrectos";
        header("location: index.php");
    }

?>
