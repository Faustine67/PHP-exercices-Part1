<h1>Exercice11</h1>

<p> Initialiser un tableau de x marques de voitures </p> <br>

 <p>Ecrire un algorithme permettant de parcourir ce tableau
    et d'en afficher le contenu <br>
   </p>
  
<p> Il y a 4 marques voiture:
   <ul> 
<li> Peugeot
<li>Renault
<li> BMW
<li> Mercedes
</p>

<h2>Résultat</h2>

<?php

// Création d'un tableau simple.
$array = array("Peugeot", "Renault", "BMW", "Mercedes");


echo '<table><tr>';
// Maintenant, on efface tous les éléments, mais on conserve le tableau :
foreach ($array as $value)
   echo '<th style="border: 1px solid black;">'.$value.'</th>';
echo'</tr></table>';

?>