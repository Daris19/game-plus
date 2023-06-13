<?php

require("configuration/commandes.php");

  $Produits=afficher();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Album example · Bootstrap v5.0</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
  header{
    background-image: url('gaming-1680187361693-388.jpg');
			background-repeat: no-repeat;
			background-size: cover;
      
  }
  div .navbar-dark bg-dark shadow-sm{
    position: fixed;
  }
</style>

    
  </head>
  <body>

    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">GamePlus</h4>
          <p class="text-muted">Site spétialiser dans la vente neufe et occasion de jeux video, console et accesoire de gaming.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Compte</h4>
          <ul class="list-unstyled">
            <li><a href="login.php" class="text-white">Se connecter</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>GamePlus</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light"style="color:white">Gaming</h1>
        <p class="lead text-body-secondary" style="color:white">La revanche des geeks. Le titre sonne comme un épisode de la sage Star Wars. Et à en croire l'offensive des marques sur les environnements vidéoludiques et la multiplication des opérations détournant les codes du gaming pour séduire les joueurs, le jeu est devenu le nouveau champ de bataille des marques.</p>
        <p>
          <a href="https://www.micromania.fr/home?kwkuniv=P3CB0556CF1100-ccp3cb0556cf1161-M0NlWG01bUpPSEdybEF0ZDhCbXFJR0tuemh6MVRYR05RakhWakx4VmFTVmdzZA%3D%3D&utm_source=netaffiliation%26utm_campaign%3Ddeeplinks, '_blank', 'width=800,height=600,toolbar=no,scrollbars=yes'" class="btn btn-primary my-2">Site simulaire</a>
          <a href="https://powerlab.fr/?msclkid=9c1fe69395bf19fa105e82b6307af5bd&utm_source=bing&utm_medium=cpc&utm_campaign=Ikom%20-%20Powerlab%20-%20GEN%20-%20PC%20Gaming%20%26%20Composants&utm_term=site%20de%20pc%20gaming&utm_content=Pc%20Gaming" class="btn btn-secondary my-2">Avec quoi jouer</a>
        </p>
      </div>
    </div>
  </section>
</header>

<main>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      <?php foreach($Produits as $produit): ?> 
        <div class="col">
          <div class="card shadow-sm">
            <h3><?= $produit->nom ?></h3>
            <img src="<?= $produit->image ?>"style-aline= center style="width: 50%">

            <div class="card-body">
              <p class="card-text"><?= substr($produit->description, 0, 160); ?>...</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="produit.php?pdt=<?= $produit->id ?>"><button type="button" class="btn btn-sm btn-success">Voir plus</button></a>
                </div>
                <small class="text" style="font-weight: bold;"><?= $produit->prix ?> €</small>
              </div>
            </div>
          </div>
        </div>
  <?php endforeach; ?>


      </div>
    </div>
  </div>

</main>

  </body>
</html>