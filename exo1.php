<h1>Exercice1</h1>

<p>Soit la phrase "Notre formation DL commence aujour'dhui".<p>
Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase

<h2>Résultat</h2>

<?php

$phrase = "Notre formation DL commence aujourd'hui";
$longueur = strlen($phrase);
echo "La phrase $phrase contient $longueur caractères<br>";
echo "La phrase $phrase contient ".strlen($phrase)." caractères<br>";
