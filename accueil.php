<!DOCTYPE html>
<html lang="fr">
<head>
  <title>1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<div class="container">

<div class="row">
  <!-- début haut gauche-->
  <div class="col-sm-9">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="javascript:void(0)">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)">Link</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="text" placeholder="Search">
            <button class="btn btn-primary" type="button">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </div>
  <!-- fin haut gauche-->
  
  <!-- début haut droit-->
  <div class="col-sm-3">
    <img src="allemagne-en-secret-il-s-est-constitue-une-bibliotheque-de-70-000-livres-63e10eb90dd0d220567149.jpg" alt="bibliothèque " width="100" height="100">
  </div>
  <!-- fin haut droit-->
</div>  

<div class="row">
  
  <!-- début bas gauche-->
  <div class="col-sm-3">
    <?php 
    include 'Formulaire.php'; 
    ?>
  </div> 
  <!-- fin bas gauche-->
  
  <!-- début bas droit-->
  <div class="col-sm-3">
  
</div>
   <!-- fin bas droit-->
</body>
</html>