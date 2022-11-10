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

$resteapayer10 = $resteapayer;
$resteapayer5 = $resteapayer;
$resteapayer2 = $resteapayer;

if($resteapayer >= 10 ) {
    $reste10 = $resteapayer/10 ;
    echo $reste10 ."<br>";
    $billet10= floor($reste10);
    echo $billet10 ."<br>";
    $resteapayer10= $resteapayer-($billet10*10);
    echo "il faut rendre $billet10 billets de 10 €" ."<br>" ; 
}

if ($resteapayer10 >= 5){
    $reste5 = $resteapayer10/5 ;
    echo $reste5 ."<br>";
    $billet5= floor($reste5);
    echo $billet5 ."<br>";
    $resteapayer5= $resteapayer10-($billet5*5);
    echo "il faut rendre $billet5 billets de 5€" ."<br>";
}

if  ($resteapayer5 >= 2){
    $reste2 = $resteapayer5/2 ;
    echo $reste2 ."<br>";
    $piece2= floor($reste2);
    echo $piece2 ."<br>";
    $resteapayer2= $resteapayer5-($piece2*2);
    echo "il faut rendre $piece2 pieces de 2€" ."<br>";
}

if  ($resteapayer2 >= 1){
    $reste1 = $resteapayer2/1 ;
    echo $reste1 ."<br>";
    $piece1= floor($reste1);
    echo $piece1 ."<br>";
    $resteapayer1= $resteapayer2-($piece1*1);
    echo "il faut rendre $piece1 pieces de 1€" ."<br>";
} 