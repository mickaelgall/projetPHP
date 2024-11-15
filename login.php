<!DOCTYPE html>
<html>
<body>
<?php
if (!isset($_POST['btnSeConnecter'])) { /* L'entrée btnSeConnecter est vide = le formulaire n'a pas été submit=posté, on affiche le formulaire */
echo '
<form action="login.php" method = "post" ">
 nom: <input name="nom" type="text" size ="30"">
code: <input name="code" type="text" size ="30"">
 <input type="submit" name="btnSeConnecter"  value="Se connecter">

    </form>';

} else

/* L'utilisateur a cliqué sur Se connecter, l'entrée btnSeConnecter <> vide, on traite le formulaire */

{

// On se connecte

    require_once 'connexion.php';

    $nom = $_POST['nom'];

    $code = $_POST['code'];

    $stmt = $connexion->prepare("SELECT * FROM agent where nom=:nom AND code=:code");

    $stmt->bindValue(":nom", $nom); // pas de troisième paramètre STR par défaut

    $stmt->bindValue(":code", $code); // idem

    $stmt->setFetchMode(PDO::FETCH_OBJ);

// Les résultats retournés par la requête seront traités en 'mode' objet

    $stmt->execute();

    $enregistrement = $stmt->fetch(); // boucle while inutile

    if ($enregistrement) { // si $enregistrement n'est pas vide = on a trouvé quelque chose -> on est connecté

        echo '<h1>bienvenue '.$enregistrement->civilite.' '.$enregistrement->nom.'</h1>';
        echo '<h2>vous habitez à '.$enregistrement->ville.'</h2>';
    } else { // La requête n'a pas retournée de résultat, on a pas trouvé de ligne correspondant au mel et mot de passe

        echo "Echec à la connexion.";

    }

}

?>

</body>

</html>