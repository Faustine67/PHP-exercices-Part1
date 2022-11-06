
<h1>Exercice9</h1>

<p> Ecrire un algorithme qui permet de savoir si une personne est 
    imposable en fonction de son âge et de son sexe <br>

 <p>Si c'est une femme dont l'age est entre 18 et 35 alors imposable <br>
Si c'est un homme de plus de 20 ans alors imposable <br>
Sinon, non imposable <br>

<h2>Résultat</h2>


<?php

$genre = "homme";
$age = 21;

if($genre == "femme" && $age >= 18 && $age< 35 ) {
    echo "imposable" ;
} elseif ($genre == "homme" && $age > 20 ) {
    echo "imposable" ;
} else{
    echo "non imposable";
}
