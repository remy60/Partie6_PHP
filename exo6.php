<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice 6 </title>
  </head>
  <body>
    <a href="exo6.php?batiment=12&amp;salle=101">clique</a>
    <?php
    // Test des parametres URL s'ils existent
    if (isset($_GET['batiment']) && isset($_GET['salle'])){
      echo $_GET['batiment'] . ' ' . $_GET['salle'];
    }
    else{
      echo "Saisie incorrect";
    }
     ?>
  </body>
</html>
