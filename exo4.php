<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice 4</title>
  </head>
  <body>
  <a href="exo4.php?langage=PHP&amp;serveur=LAMP">clique</a>
  <?php
  // Test des parametres URL s'ils existent
  if (isset($_GET['langage']) && isset($_GET['serveur'])){
    echo $_GET['langage'] . ' ' . $_GET['serveur'];
  }
  else{
    echo "Saisie incorrect";
  }
   ?>
  </body>
</html>
