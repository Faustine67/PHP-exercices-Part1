<h1>Exercice 13</h1>

<p> Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de 
coefficient). Elle devra être affichée avec 2 décimales.
  </p>

 <p>
Affichage :
10 12 8 19 3 16 11 13 9
Sa moyenne générale est donc de : 11.22  

<h2>Résultat</h2>

<?php

$notes = [10,12,8,19,3,16,11,13,9];
$nbnotes = count($notes);
$sommeNotes = array_sum($notes);
$moyenne = round($sommeNotes / $nbnotes, 2);

echo "La moyenne est $moyenne<br>";