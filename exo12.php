<h1>Exercice12</h1>

<p> A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée 
(tableau contenant clé et valeur), <br>
dire bonjour aux différentes personnes dans leur langue 
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
<br>
   </p>
  
<p> Affichage <br>
Salut Mickaël <br>
Hola Virgile <br>
Hello Marie-Claire  <br> </p>

<h2>Résultat</h2>

<?php

$tabNomLang =  array ("Mickael"=> "FR",  "Virgile"=>"ES", "Marie-Claire"=>"ENG");


    foreach($tab as $key => $value)
    {
            if($value == "FR")
                echo "Bonjour " . $key . "<br>";   
            else if($value == "ES")
                echo "Hola " . $key . "<br>";
            else if($value == "ENG")
                echo "Hello " . $key . "<br>";
    }


?>