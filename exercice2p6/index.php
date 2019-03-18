<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Exercice 2 Partie 6 php</title>
 </head>
 <body>
   <!-- en html & s'ecris &amp; c'est ce qui sépare les différents paramètres dans l'url. -->
   <a href="index.php?lastname=Nemare&amp;firstname=Jean">Hello !</a>
<!-- Faire une page index.php. Tester sur cette page que le paramètre age existe et
      si c'est le cas l'afficher sinon le signaler : index.php?lastname=Nemare&firstname=Jean -->

 <?php
 if (isset($_GET['age'])) //isset test directement la présence d'un paramètre et permet d'envoyer un message si il n'existe pas.
 {
  echo  $_GET['age'] ;
 } else {
	echo 'Il faut renseigner un age !';
  }
  ?>
</body>
</html>
