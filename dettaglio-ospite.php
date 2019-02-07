<?php

  $idospite = $_GET['idospite'];

  include 'database.php';

 ?>


<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ospite <?php echo $idospite; ?></title>
  </head>
  <body>

    <?php foreach ($ospiti as $ospite) { ?>
      <?php if ($idospite == $ospite['id'] ) { ?>
        <ul>
          <li>ID: <?php echo $ospite['id']; ?></li>
          <li>Nome: <?php echo $ospite['name']; ?></li>
          <li>Cognome: <?php echo $ospite['lastname']; ?></li>
          <li>Data di nascita: <?php echo $ospite['date_of_birth']; ?></li>
          <li>Tipo di documento: <?php echo $ospite['document_type']; ?></li>
          <li>Numero di documento: <?php echo $ospite['document_number']; ?></li>
        </ul>

      <?php } ?>


      <?php } ?>

  </body>
</html>
