<?php
//Algorithme proposant a ses clients quatre familles de tarifs identifié par une couleur

//INITIALSATION
$age = 0;
$agepermis = 0;
$nombreaccident = 0;
$Fidelite = 0;

//PROCEDURE
$age = intval(readline("Veuillez saisir vôtre age : ") . "\n");
$agepermis = intval(readline("Veuillez saisir la date de vôtre permis : ") . "\n");
$nombreaccident = intval(readline("Veuillez saisir le nombre d'accident à vôtre actif : ") . "\n");
$fidelite = intval(readline("Depuis combien d'année êtes vous abonnès à notre assurance : ") . "\n");

//Moins de 25ans
if ($age < 25) {

    if (($agepermis < 2) && ($nombreaccident === 0) && ($fidelite < 5)){
        echo "Vous avez le tarif rouge ";
    }
        if (($agepermis > 2) && ($nombreaccident === 0) && ($fidelite > 5)){
        echo "Vous avez le tarif vert ";
        }
        else if (($agepermis > 2) && ($nombreaccident === 1) && ($fidelite > 5)){
        echo "Vous avez le tarif orange";
    }
}
//Plus de 25ans 
    else if ($age > 25) {
    }
        if (($agepermis < 2) && ($nombreaccident === 0) && ($fidelite < 5)) {
            echo "Vous avez le tarif orange";
        } 
        else if (($agepermis < 2) && ($nombreaccident === 1) && ($fidelite > 5)) {
            echo "Vous avez le tarif orange";
        }
     else if (($agepermis > 2 ) && ($nombreaccident === 0) && ($fidelite > 5)){
        echo "Vous avez le tarif Vert ";
     }
        if(($agepermis > 2) && ($nombreaccident === 1) && ($fidelite > 5)){
            echo "Vous avez le tarif Vert";
        }
            else if (($agepermis > 2) && ($nombreaccident === 2) && ($fidelite > 5)){
            echo "Vous avez le tarif orange";
        }  
else{
    echo "Refuser";
    echo"looser";
}       


