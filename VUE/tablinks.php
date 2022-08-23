<script type="text/javascript" src="../assets/js/tablinks.js"></script>

<div class="tab" id='tab-links'>
  <form action="../VUE/listeEntreprise.php">
    <button class="tablinks"><b>Liste des entreprises</b></button>
  </form>
  <form action="../VUE/listeOffer.php">
    <button class="tablinks"><b>Liste des offres</b></button>
  </form>
  <button class="tablinks" id='liste-user-all'><b>Liste des utilisateurs</b></button>
  <div class='liste-user display-none'>
    <a href='../VUE/listeUser.php?role=pilote'><button class="tablinks"><em>Pilotes</em></button></a>
    <a href='../VUE/listeUser.php?role=delegue'><button class="tablinks"><em>Délégués</em></button></a>
    <a href='../VUE/listeUser.php?role=etudiant'><button class="tablinks"><em>Etudiants</em></button></a>
  </div>
</div>