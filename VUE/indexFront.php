<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name='theme-color' content='#84A9CF'>

  <!-- PWA -->
  <!-- <script type="text/javascript" src="../index.js"></script>
  <script type="text/javascript" src="../service-worker.js"></script>
  <link rel="manifest" href="../manifest.json">
  <link rel="apple-touch-icon" href="../assets/images/logo.png" /> -->
  <!-- PWA -->
</head>

<!-- LINK -->
<?php include 'link.php' ?>


<!-- NAVBAR -->
<?php include 'navbar.php' ?>



<div class='class="index-image'>
  <img src="../assets/images/indexImage1920x1080_txt.jpg" class="w-100">


  <style>
    .index-image {
      /* position: relative; */
      height: auto;
    }

    .text-image {
      position: absolute;
      top: 50%;
      left: 45%;
      width: 100%;
      /* text-align: center; */
    }

  </style>


  <!--CARROUSSEL-->
  <div class='carroussel-size'>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">

          <img src="../assets/images/entreprise.png" class="d-block w-100">

          <div class="carousel-caption d-md-block">
            <a href='../VUE/listeEntreprise.php'>
              <button type="submit" class="btn btn-secondary mb-2 btn-lg btn-entreprise">Entreprises</button></a>
            <h5>Rechercher, consulter...</h5>
          </div>

        </div>
        <div class="carousel-item">
          <img src="../assets/images/offre.jpg" class="d-block w-100 item img" alt="...">

          <div class="carousel-caption d-md-block">
            <a href='../VUE/listeOffer.php'>
              <button type="submit" class="btn btn-secondary mb-2 btn-lg btn-offre">Offres</button></a>
            <h5>Rechercher, consulter...</h5>
          </div>

          <style>
            .text-image {
              width: max-content;
            }

            .carousel-item {
              height: auto;
            }

            body {
              display: contents;
            }
          </style>

        </div>
        <div class="carousel-item">
          <img src="../assets/images/user.jpg" class="d-block w-100" alt="...">

          <div class="carousel-caption d-md-block">
            <a href='../VUE/listeUser.php'>
              <button type="submit" class="btn btn-secondary mb-2 btn-lg btn-offre">Utilisateurs</button></a>
            <h5>Rechercher, consulter...</h5>
          </div>

        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>


  <!--A propos-->

  <div class='a-propos-container' id='a-propos-container'>
    <div class="card text-center text-white bg-dark">
      <div class="card-header">
        A propos de nous...
      </div>
      <div class="card-body">
        <h5 class="card-title">Nos fonctionnalit&eacute;s et philosophies:</h5>
        <p class="card-text">Blalakjb iuqr giuwd g.</p>
      </div>
      <div class="card-footer text-muted">
      </div>
    </div>
  </div>



  <!--FOOTER-->
  <?php include 'footer.php' ?>