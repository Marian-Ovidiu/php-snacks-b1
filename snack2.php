<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    if (strlen($_GET['name']) > 3) {
      if (strpos($_GET['email'], '.') !== false && strpos($_GET['email'], '@') !== false) {
        if (is_numeric($_GET['age'])) {
          echo 'Accesso riuscito';
        } else {
          echo 'Accesso negato';
        }
      } else {
        echo 'Accesso negato';
      }
    } else {
      echo 'Accesso negato';
    };
     ?>

  </body>
</html>
