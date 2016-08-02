<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice 3 </title>
</head>
<body>
  <a href="exo3.php?dateDebut=2/05/2016&amp;dateFin=27/11/2016">clique</a>
  <?php
  // Test des parametres URL s'ils existent
  if (isset($_GET['dateDebut']) && isset($_GET['dateFin'])){
    echo $_GET['dateDebut'] . ' ' . $_GET['dateFin'];
  }
  else{
    echo "Saisie incorrect";
  }
    ?>
</body>
</html>
