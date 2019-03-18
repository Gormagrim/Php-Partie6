<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Exercice 3 Partie 6 php</title>
 </head>
 <body>
   <!-- en html & s'ecris &amp; c'est ce qui sépare les différents paramètres dans l'url. -->
   <a href="index.php?startDate=2/05/2016&amp;endDate=27/11/2016">Hello !</a>
<!-- Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL
      existent et les afficher: index.php?startDate=2/05/2016&endDate=27/11/2016 -->

 <?php
 if (isset($_GET['startDate']) && isset($_GET['endDate'])) //isset test directement la présence d'un paramètre et permet d'envoyer un message si il n'existe pas.
 { ?>
  <p><?= $_GET['startDate'] ?></p>
  <p><?= $_GET['endDate'] ?></p>
  <?php
 } else {
	echo 'Il faut renseigner les dates !';
  }
  ?>
</body>
</html>
