<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="exo1.php?nom=Nemare&amp;prenom=Jean">clique</a>
    <?php
    if (isset($_GET['nom']) && isset($_GET['prenom'])){
 echo 'Bonjour ' . $_GET['nom'] . ' ' . $_GET['prenom'];
}
else{
  echo "Saisie incorrect";
}

?>
  </body>
</html>
