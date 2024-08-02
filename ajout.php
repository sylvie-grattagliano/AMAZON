<?php
session_start();

if (!isset($_SESSION['panier'])){
    $_SESSION['panier'] = array();
}

    array_push($_SESSION['panier'], $_GET["id"]);
    header("Location: page3.php");

    
?>