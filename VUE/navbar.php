<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="../assets/js/navbar.js"></script>
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <script>
    function requestDesktopSite() {
      if (document.getElementsByTagName('meta')['viewport'].content == 'width= 1440px;') {
        document.getElementsByTagName('meta')['viewport'].content = 'width= 400px;';
      } else {
        document.getElementsByTagName('meta')['viewport'].content = 'width= 1440px;';
      }
    }
  </script>
  <button class="btn btn-primary mb-2" id='switch-mode' onclick="requestDesktopSite()">Version PC</button>

  <div class="container">
    <a class="navbar-brand" href="../VUE/indexFront.php">Stage Engine</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="../VUE/indexFront.php#a-propos-container">A propos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
        <li class="nav-item">
        </li>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <li class="nav-item">
          <!-- <a href="../VUE/auth.php"> -->
          <button type="button" class="btn btn-secondary mb-2 auth-button">Authentification</button>
          <!-- </a> -->
        </li>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <li class="nav-item">
          <a href="../VUE/account.php">
            <button type="button" class="btn btn-secondary mb-2">Wishlist</button></a>
      </ul>
    </div>
  </div>
  <!-- authController -->
  <?php require_once '../CONTROLLER/authController.php' ?>
</nav>
<div class="card auth-card display-none">
  <div class="card-body">
    <form method='post'>
      <label for="LoginAuth">Login:</label><br>
      <input type="text" id="LoginAuth" name="LoginAuth"><br>
      <label for="mdpAuth">Mot de passe:</label><br>
      <input type="text" id="mdpAuth" name="mdpAuth"><br><br>

      <input type="submit" name='auth' class='btn btn-light mb-2' value="Connection">
    </form>
  </div>
</div>


<style>
  .auth-card {
    position: absolute;
    /* float: right; */
    margin-left: 70%;
  }

  /* MOBILE */
  @media screen and (max-width: 500px) {
    .auth-card {
      position: absolute;
      margin-left: 30%;
    }

    .responsive-hide {
      display: none;
    }

    .tab {
      position: absolute;
      width: fit-content;
      display: none;
    }

    .tabcontent {
      width: 100%;
    }

    .btn-switch {
      float: right;
    }

    #btn-switch1 {
      display: none;
    }

    #btn-switch2 {
      display: block;
    }
  }

  /* DESKTOP */
  @media screen and (min-width: 800px) {
    #switch-mode {
      display: none;
    }

    .tabcontent {
      width: 85%;
    }

    #btn-switch2 {
      display: none;
    }
  }
</style>