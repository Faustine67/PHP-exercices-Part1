<h1>Exercice6</h1>

<p>Soit le prix unitaire de l'article: 9,99 <br>
Soit la quantité : 5 <br>
Soit le taux de TVA : 0,2 <br>
Soit le  montant de la facture à regler de : 59,94 <br>
Ecrire un algorithme permettant de calculer un montant de facture à regler <br>
La valeur doit exprimée en decimale</p>

<h2>Résultat</h2>

<?php

$prixunitaire = 9.99;
$quantite = 5;
$tva = 0.2;

// (9,99+(0.2*9.99))*5

$montanttotal = ($prixunitaire +($tva  *$prixunitaire)) * $quantite;

$montanttotal = round ($montanttotal, 1);

echo "Le montant total de la facture est de $montanttotal";