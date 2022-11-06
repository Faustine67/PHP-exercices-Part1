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

$montantapayer = 152 ;
$montantverse = 200 ;
$resteapayer =  $montantverse - $montantapayer ;

echo $montantapayer ."<br>" ; 
echo $montantverse ."<br>" ; 
echo $resteapayer ."<br>"; 

if($resteapayer >= 10 ) {
    echo $resteapayer -  ;
} elseif ($genre == "homme" && $age > 20 ) {
    echo "imposable" ;
} else{
    echo "non imposable";

?>