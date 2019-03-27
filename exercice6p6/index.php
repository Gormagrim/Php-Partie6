<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>Exercice 6 Partie 6 php</title>
</head>
<body>
  <!-- en html & s'ecris &amp; c'est ce qui sépare les différents paramètres dans l'url. -->
  <a href="index.php?building=12&amp;room=101">Hello !</a>
  <!-- Faire une page index.php. Tester sur cette page que tous les paramètres
  de cette URL existent et les afficher: index.php?building=12&room=101 -->
  <?php
  if (isset($_GET['building']) && (isset($_GET['room']))) //isset test directement la présence d'un paramètre et permet d'envoyer un message si il n'existe pas.
  { ?>
    <p><?= $_GET['building'] ?></p>
    <p><?= $_GET['room'] ?></p>
    <?php
  } else { ?>
    <p>Il faut renseigner les paramètres !</p>
  <?php  }
  ?>
</body>
</html>
