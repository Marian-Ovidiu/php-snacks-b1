<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <?php

    $array = [
      [
        'name' => 'Mario',
        'surname' => 'Portinaro',
        'vote' => [6,7,9,4,6,4]
      ],
      [
        'name' => 'Marian',
        'surname' => 'Hutanu',
        'vote' => [2,7,5,7,6,10]
      ],
      [
        'name' => 'Andreea',
        'surname' => 'Hutanu',
        'vote' => [6,3,5,4,8,8]
      ]
    ];


    foreach ($array as $value) { ?>

      <div class=""> <strong> Nome: </strong>  <?php echo $value['name']; ?></div>
      <div class=""><strong>  Cognome: </strong> <?php echo $value['surname']; ?></div>
      <?php
      $total = array_sum($value['vote']);
      $media = $total / count($value['vote']);
      $media = round($media, 2)?>
      <div class=""> <strong> Media dei voti </strong> <?php echo $media ?></div>
      <br>
  <?php  } ?>
  </body>
</html>
