<!DOCTYPE html>
<html lang="fr">
<head>
<title>Titre de la page</title>
 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<style>
table, th, td {
border:1px solid black;   
}
</style>
<table>
<?php
require_once('connexion.php');
$stmt = $connexion->prepare("SELECT * FROM agent WHERE codePostal = 33000");
$stmt->setFetchMode(PDO::FETCH_OBJ);
// Les résultats retournés par la requête seront traités en 'mode' objet
$stmt->execute();
// Parcours des enregistrements retournés par la requête : premier, deuxième…
while($enregistrement = $stmt->fetch())
{
// Affichage des champs nom et prenom de la table 'utilisateur'
echo "<tr>
<td>$enregistrement->nom</td><td>$enregistrement->prenom</td><td>$enregistrement->adresse1</td>
</tr>";
}
?>
</body>
</html>