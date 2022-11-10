<h1>Exercice10</h1>

<p> A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui 
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €  </p> <br>

 <p>Montant à payer : 152€ <br>
    Montant versé: 200€ <br>
    Reste à payer : 48€ </p> <br>
  
<p> Rendue de monnaie: <br>
    4 billets de 10 € - 1 billet de 5€ - 1 piece de 2 € - 1 piece de 1 € 
    </p>

<h2>Résultat</h2>

<?php

$sommeDue = 151;
$montantVerse = 200;
$nb10 = 0;
$nb5 = 0;
$nb2 = 0;
echo "Montant à payer : ".$sommeDue." €
";
echo "Montant versé : ".$montantVerse." €
";
$reste = $montantVerse - $sommeDue;
echo "Reste à payer : ".$reste." €
";
while($reste >= 10){
$nb10 = $nb10 + 1;
$reste = $reste - 10;
}
while($reste >= 5){
$nb5 = $nb5 + 1;
$reste = $reste - 5;
}
while($reste >= 2){
$nb2 = $nb2 + 1;
$reste = $reste - 2;
}
echo "Rendue de monnaie : ".$nb10." billets de 10 - ".$nb5." billets de 5 -
".$nb2." pièces de 2 - ".$reste." pièces de 1";