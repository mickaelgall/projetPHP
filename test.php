<!DOCTYPE html>

<html lang="fr">

<head>

  <title>page test php</title>

  <meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

<?php
// exemple commentaire court
/* exemple commentaire long */

//espace entre un texte et " pour afficher en ligne un espace des 2 variable 
$message = "comment ça va ? ";
$nom = "Mickaël";
echo "<h1>".$message.$nom."</h1>";

echo "<br>"; /* remttre à la ligne entre <?php et ?> en php */

$nb = 2;
if ($nb < 3)
    echo "c'est petit ";
else 
    echo "c'est grand ";
    echo "car c'est $nb ";

echo "<br>";// en mettre 2 créer 2 espace
echo "<br>";

$couleur = "jaune";
    switch($couleur) {

        case "rouge":
    
            echo "Choix de la couleur rouge";
    
            break;
    
        case "verte":
    
            echo "Choix de la couleur verte";
    
            break;        break;
    
        default:
    
            echo "Autres choix!";
    
    }

echo "<br>";


//table de multiplication

echo "<table border=1>";
$res = 0;
for ($x = 0; $x <= 10; $x++) {
    $res = $x *8;
    echo"<tr><td>8*$x=</td><td>$res</td></tr>";
}

echo "</table>";

    
     

?>

</body>
</html>    
   
    
