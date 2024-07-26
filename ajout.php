<?php
session_start();
    array_push($_SESSION['panier'], $_GET['choix']);
    header("Location: page3.php");

?>