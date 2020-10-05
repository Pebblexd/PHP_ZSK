<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <title>dołaczanie plików</title>
  </head>
  <body>
    <h3>Początek pliku</h3>
    <?php
      include_once './3_1_file.php';
      include './3_1_file.php';

      echo '<br>Require';
      require './3_1_file.php';
      require_once './3_1_file.php';
     ?>
    <h3>Koniec pliku</h3>
  </body>
</html>
