<?php
//Lire la suite des prix (en euros entiers et terminée par zéro) des achats d'un client.
//Calculer la somme qu'il doit, lire la somme qu'il paye, et simuler la remise de la monnaie en affichant les textes
//"10Euros", "5euros" et "1Euro" autant de fois qu'il y a de coupures de chaque sotre à rendre

//Variables
$CoutDuProduit = 0;
$ArgenDonne = 0;
$somme = 0;
$Billet10 = 10;
$Billet5 = 5;
$Piece1 = 1;
$sommedesproduits = 0;
$Rendu = 0;

//PROCEDURE
$CoutDuProduit = intval(readline("Veuillez saisir le prix de votre premier achat : ")) ;
$sommedesproduits = ($sommedesproduits+$CoutDuProduit);                                         // On ajoute le premier produit entré
while ($CoutDuProduit != 0 ){                                                                   // Tant que le prix du produit est différent de 0 on continue de demandé les autres articles
    $CoutDuProduit = intval(readline("Prix du produit : "));
$sommedesproduits = ($sommedesproduits+$CoutDuProduit);
}

echo "Vous devez la modique somme de : " . $sommedesproduits . " € " . "\n";                    // On calcule la somme des produits acheté par le client
$ArgenDonne = intval(readline("Argent donné par le client :  " )) . "\n";                       // On demande l'argent donné par le client 
$rendu = ($ArgenDonne-$sommedesproduits);                                                       // On calcule ce que l'on doit rendre au client

$Billet10 = abs(intval(($rendu / 10)));
$Billet5 = abs(intval(($rendu % 10) /5 ));
$Piece1 = abs(intval(($rendu % 10) % 5 ));

echo "Voici-la monnaie rendu : " . "\n";
echo "Billet de 10 = ". $Billet10 . "\n";
echo "Billet de 5 = " . $Billet5 . "\n";
echo "Piece de 1 = " . $Piece1 . "\n";

Echo "Aurevoir";

