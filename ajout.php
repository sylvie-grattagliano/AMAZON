<?php
session_start();
    array_push($_SESSION['panier'], $_GET["id"]);
    header("Location: page3.php");

    
?>