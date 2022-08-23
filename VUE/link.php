<head>
  <?php

  (isset($_COOKIE['permissions'])) ? $recup = unserialize($_COOKIE['permissions']) : '';

  // Fonction in_array() amélioré
  function in_array_any($needles, $haystack)
  {
    return !empty(array_intersect($needles, $haystack));
  }
  ?>

  <link rel="stylesheet" href="../assets/lib/bootstrap.min.css">
  <script src="../assets/lib/bootstrap.bundle.min.js"></script>


  <link rel="stylesheet" type="text/css" href="../assets/css/css.css">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">




  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
  <script src="../assets/lib/jquery.js"></script>
  <script type="text/javascript" src="../assets/js/js.js"></script>
</head>