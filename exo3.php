<h1>Exercice3</h1>

<p>Soit la phrase "Notre formation DL commence aujour'dhui".<p>
<br>Ecrire un algorithme permettant de remplacer le mot aujourd'hui par le mot demain. </br>
<br> Afficher l'ancienne et la nouvelle phrase </br>

<h2>Résultat</h2>

<?php

$phrase = "Notre formation DL commence aujourd'hui";
$change = array("aujourd'hui", "formation");
$nouveau = array ("demain", "apprentissage");

$newphrase = str_replace($change,$nouveau,$phrase);

echo $phrase."<br>";
echo $newphrase;