<h1>Exercice7</h1>

<p>Soit poussin : entre 6 et 7 ans <br>
Soit pupille entre 8 et 9 ans <br>
Soit minime : entre 10 et 11 ans <br>
Soit cadet: à partir de 12 ans <br>
Si categorie pas gérée: le preciser <br>
Ecrire un algorithme permettant de renvoyer la categorie d'un enfant en fonction de son age <br>

<h2>Résultat</h2>

<?php

$age = 10;


if ($age == 6 || $age== 7) {
    $resultat = "poussin";
} elseif($age == 8 || $age == 9 ) {
    $resultat = "pupille";
}elseif($age == 10 || $age == 11) {
	$resultat="minime";
} elseif($age<=12 ) {
	$resultat = "cadet";
} elseif($age>6 ) {
 	$resultat = "pas gérée";
}


echo "L'enfant qui a $age ans appartient à la catégorie $resultat";

