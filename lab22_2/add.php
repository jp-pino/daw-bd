<?php
    session_start();

    if(isset($_SESSION["usuario"]) ) {
        include("partials/_add_form.html");
    } else {
        header("location:index.php");
    }
?>
