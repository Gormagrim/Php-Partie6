<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Exercice 1 Partie 6 php</title>
 </head>
 <body>
   <!-- en html & s'ecris &amp; c'est ce qui sépare les différents paramètres dans l'url. -->
   <a href="index.php?lastname=Nemare&amp;firstname=Jean">Hello !</a>
<!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette
      URL existent et les afficher: index.php?lastname=Nemare&firstname=Jean -->
<?php
  // $_GET permet d'aller recupérer la valeur de lastname et firstname directement dans l'url.
  echo $_GET['lastname'];
  echo $_GET['firstname'];
 ?>

</body>
</html>
