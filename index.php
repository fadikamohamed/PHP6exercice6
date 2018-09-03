<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 6</title>
  </head>
  <body>
    <p>
      <?php
        //index.php?building=12&room=101
        if (isset($_GET['building']) AND isset($_GET['room'])) {
          echo $_GET['building'] . ' ' . $_GET['room'];
        }

       ?>
    </p>
  </body>
</html>
