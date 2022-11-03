<h1>Exercice2</h1>

<p>Soit la phrase "Notre formation DL commence aujour'dhui".<p>
Ecrire un algorithme permettant de compter le nombre de mots

<h2>Résultat</h2>

<?php

$chaineDeCaracteres = "Notre formation DL commence aujourd'hui";

echo $chaineDeCaracteres."<br>";
$nbMots = str_word_count($chaineDeCaracteres);
echo "La phrase contient $nbMots mots<br>";