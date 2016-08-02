<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice 5 </title>
  </head>
  <body>
    <a href="exo5.php?semaine=12">clique</a>
    <?php
    // Test des parametres URL s'ils existent
    if (isset($_GET['semaine'])){
      echo $_GET['semaine'];
    }
    else{
      echo "Saisie incorrect";
    }
    ?>
  </body>
</html>
