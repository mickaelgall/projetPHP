<!DOCTYPE html>

<html lang="fr">
<head>
  <title>Table de multiplication</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  
  <h2>Formulaire HTML</h2>

  <form method="get" action="script.php">
  
      <fieldset>
  
          <legend>Informations personnelles</legend>
  
          Prénom :<input type="text" id="txtprenom" name="txtprenom"><br><br>
          Nom : <input type="text" id="txtnom" name="txtnom"><br><br>
          J'accepte les conditions
            <input type="checkbox" id="accepte" name="accepte">
  
      </fieldset>
  
      <input type="submit" name="ok" value="Envoyer">
  
  </form>
  
    <?php
    if (isset($_GET["ok"])){
        $prenom=$_GET["txtprenom"];
        $nom=$_GET["txtnom"];
        
        echo "Bonjour ".$prenom." ".$nom.".<br>";
        if (isset($_GET["accepte"])) 
            echo "vous avez accepté les conditions";
            else
            echo "vous avez décliné";
    }
    ?>

</body>
</html>