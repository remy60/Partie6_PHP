<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice 2</title>
  </head>
  <body>
    <a href="exo2.php?nom=Nemare&amp;prenom=Jean&amp;age=22">clique</a>
    <?php if (isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['age'])){
 echo 'Bonjour ' . $_GET['nom'] . ' ' . $_GET['prenom'].' '. 'Tu as'.' '. $_GET['age'].' '.'ans';
}
else{
  echo "Saisie incorrect";
}
?>
  </body>
</html>
