<h1>Exercice5</h1>

<p>Soit le montant en francs : 100</p>
Soit 100 francs= 15.24€ <br>
Ecrire un algorithme permettant de convertir la valeur en franc en euros <br>
La valeur doit etre arrondie à 2 decimales

<h2>Résultat</h2>

<?php

$montantfranc = 100;
$valeureuro = 0.1524;
$conversion = $montantfranc * $valeureuro;
$conversion = round ($conversion, 2);
echo "Le valeur en euros de $montantfranc est de $conversion";
