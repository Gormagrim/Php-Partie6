<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Exercice 1 Partie 6 php</title>
 </head>
 <body>
<!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette
      URL existent et les afficher: index.php?lastname=Nemare&firstname=Jean -->
      <a href="index.php?lastname=Nemare&amp;firstname=Jean">Hello !</a>
<?php
  // $_GET permet d'aller recupérer la valeur de lastname et firstname directement dans l'url.
 // $_GET est une superglobale. 'lastname' est la clef associative.
    if (isset($_GET['lastname']) && isset($_GET['firstname'])) { ?>
    <p><?= $_GET['firstname'] . ' ' . $_GET['lastname'] ?></p>
    <?php } else { ?>
    <p>ERROR</p>
   <?php }

 ?>
</body>
</html>
