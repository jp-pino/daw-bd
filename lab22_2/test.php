<?php
session_start();
require_once("modelo.php");
echo $_SESSION["error_archivo"];
?>