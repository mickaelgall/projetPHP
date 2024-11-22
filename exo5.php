<!DOCTYPE html>

<html lang="fr">

<head>

  <title>skibidiquestionnaire</title>

  <meta charset="utf-8">

<!-- charset=UTF-8 : pour que les caractères accentués ressortent correctement -->

  <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- la balise ci-dessus indique que l'affichage doit se faire sur la totalité de l'écran, par défaut voir Responsive Design -->

</head>

<body>
<?php
 require_once 'connexion.php';
 $stmt = $connexion->prepare("INSERT INTO tableau (nom, prenom, adresse ) VALUES (:nom, :prenom, :adresse)");

if(!isset($_POST['btnEnvoyer'])) 
{/* L'entrée btnEnvoyer est vide = le formulaire n'a pas été posté, on affiche le formulaire */
    echo '
    <form action="" method="post">
    Nom : <input type="text" name="txtNom"><br>
    Prénom : <input type="text" name="txtPrenom"><br>
    Adresse : <input type="text" name="txtAdresse"><br>
    <input type="submit" name="btnEnvoyer" value="Envoyer" >
    </form>';
}

else 
/* L'utilisateur a cliqué sur Envoyer, l'entrée btnEnvoyer <> vide, on traite le formulaire */
{    
    $nom = $_POST['txtNom'];
    $prenom = $_POST['txtPrenom'];
    $adresse = $_POST['txtAdresse'];
$stmt->bindValue(':nom', $nom, PDO::PARAM_STR);
$stmt->bindValue(':prenom', $prenom, PDO::PARAM_STR);
$stmt->bindValue(':adresse', $adresse, PDO::PARAM_STR);
$stmt->execute();
echo 'Ajouté avec succès'
}
?>

</body>

</html>  