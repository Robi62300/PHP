<?php
//Ecrire un Algorithm qui génère un nombre aléatoire entre 1 et 100, qui demande un nombre à l'utilisateur
//qui lui indique si celui-ci est plus grand ou plus petit et qui affiche un message de suucès une fois trouvé

//INITIALISATION
$NombreGenere = 0;
$NombreSaisi = 0;
$NombreDecoups = 1;
$NombreDecoupsMax = 0;
$perdu = 0;
$min = 0;
$max = 0;
$jeu = 0;

//PROCEDURE

//$NombreGenere = rand(0, 100);         // La plage est entre 0 et 100
echo "Entré vôtre plage de nombre " . "\n";
$min = intval(readline("Minimum : ") . "\n");
$max = intval(readline("Maximum : "));
$NombreGenere = rand($min, $max);       // On demande la plage de nombre à l'utilisateur
$NombreDecoupsMax = intval(readline("Veuillez saisir le nombre d'essaie : ") . "\n"); // On demande le nombre d'essaie
$NombreSaisi = intval(readline("Veuillez saisir un Chiffre : ") . "\n");


while (($NombreSaisi != $NombreGenere) && ($NombreDecoups < $NombreDecoupsMax)) {
    if (($NombreSaisi > $max) || ($NombreSaisi < $min)) {
        echo "Vous n'êtes pas dans la plage de nombre " . "\n";
        echo "Recommencer " . "\n";
        $NombreSaisi = intval(readline("Veuillez saisir un Chiffre : "));
    } else if ($NombreSaisi > $NombreGenere) {
        $NombreSaisi = intval(readline("Veuillez saisir un nombre plus petit : "));
    } else if ($NombreSaisi < $NombreGenere) {
        $NombreSaisi = intval(readline("Veuillez saisir un nombre plus grand : "));
    }
    $NombreDecoups = $NombreDecoups + 1;
}
if ($NombreDecoups < $NombreDecoupsMax) {
    echo "Vous avez gagné " . "au bout de " . $NombreDecoups . " coup/s ";
} else {
    echo "Vous avez perdu" . " en " . $NombreDecoups . " coup/s ";
}
