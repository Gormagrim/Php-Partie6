<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Exercice 4 Partie 6 php</title>
 </head>
 <body>
   <!-- en html & s'ecris &amp; c'est ce qui sépare les différents paramètres dans l'url. -->
   <a href="index.php?language=PHP&amp;server=LAMP">Hello !</a>
<!-- Faire une page index.php. Tester sur cette page que tous les
      paramètres de cette URL existent et les afficher: index.php?language=PHP&server=LAMP -->

 <?php
 if (isset($_GET['language']) && isset($_GET['server'])) //isset test directement la présence d'un paramètre et permet d'envoyer un message si il n'existe pas.
 { ?>
  <p><?= $_GET['language'] ?></p>
  <p><?= $_GET['server'] ?></p>
  <?php
 } else {
	echo 'Il faut renseigner les paramètres !';
  }
  ?>
</body>
</html>
