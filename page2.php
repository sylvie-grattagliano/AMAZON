<?php
session_start();

          // ne pas oublier Inclure le fichier contenant les produits php

include("produits.php");

         // Récupérer l'ID du produit sélectionné

$choix = $_GET["id"] ?? 0;

       // creation de mes  variables elles vont vérifier si le produit existe ;)

$produit = array();
//variable  par defaut confirme que article pas trouvé 
$produitExiste = false; 
// boucle speciale pour tableau associatif
foreach ($produits as $p) {
    if ($p["id"] == $choix) {
        $produit = $p;
        $produitExiste = true;
        break;
    }
}

// pour lier ma page produits php base de donnée

include("produits.php");




?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nom produit</title>
    <link rel="stylesheet" href="style-produit.css">

</head>
<body>
<header>
        <img src= "\runtrack2bis\meutre facile\logo.png" width="200px" id="logo">
        <h1>Meurtre Facile</h1>
    </header>
    <nav>
            <p><a href="page1.php">Accueil</a></p>
            <p><a href="#archerie">Archerie</a></p>
            <p><a href="#arme-a-feu">Arme à feu</a></p>
            <p><a href="#arme-de-defense">Arme de défense</a></p>
            <p><a href="#arme-de-loisirs">Arme de loisirs</a></p>
            <p><a href="#munitions">Munitions</a></p>
    </nav>

<main>
                <!--produit -->

    <div> 
        <main>
            
             <div class="bloc1">
                
           <?php if ($produitExiste): ?>

            <div class="product-image">
            <img src="<?=$produits[$choix-1]["image"];?>"> </p>
    </div>

           <div class="product-details">

                <h2><?=$produits[$choix-1]['name'];?></h2>
                <p class="description"><?=$produits[$choix-1]["overview"];?></p>
                <!--<div class="product-image">-->

                
                <p class="price"><?=$produits[$choix-1]["price"];?> €</p>
                
                <button class="panier"><a href="armetirecart.php"><?=$choix;?></a>Ajouter au Panier</button>
            </div>
    </div>
                 <?php else: ?>
    <div class="erreur">
                  <p>Erreur : Produit non trouvé.</p>
            </div>
                <?php endif; ?>

    </main>
 

           
        </div>


</body>
<footer>
        <p>&copy; 2024 Meurtre Facile. Tous droits réservés.</p>
    </footer>
</html>




