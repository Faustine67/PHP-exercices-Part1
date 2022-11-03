<h1>Exercice4</h1>

<p>Soit la phrase "Engage le jeu que je le gagne".<p>
<br>Ecrire un algorithme permettant de savoir si une phrase est un palindrome </br>

<h2>Résultat</h2>

<?php

$phrase = "Engage le jeu que je le gagne";

//Convertir les majuscules en minuscules la chaine inversée
$phraseMin = strtolower($phrase);
//supprimer tous les espaces de la chaine inversée
$phraseMinSansEspace = str_replace(" ","",$phraseMin);

//Inverser la chaine de caracteres
$phraseInversee = strrev($phraseMinSansEspace);

//fonction if
if($phraseMinSansEspace == $phraseInversee) {
	echo "La phrase « $phrase » est palindrome";
} else {
	echo "La phrase « $phrase » n'est pas palindrome";
}