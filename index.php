<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    $matches = [
      [
        'Casa' => 'Atalanta',
        'PuntiCasa' => '2',
        'Ospite' => 'Benevento',
        'PuntiOspite' => '0'
      ],
      [
        'Casa' => 'Bologna',
        'PuntiCasa' => '3',
        'Ospite' => 'Cagliari',
        'PuntiOspite' => '3'
      ],
      [
        'Casa' => 'Crotone',
        'PuntiCasa' => '3',
        'Ospite' => 'Fiorentina',
        'PuntiOspite' => '1'
      ],
      [
        'Casa' => 'Genoa',
        'PuntiCasa' => '2',
        'Ospite' => 'Inter',
        'PuntiOspite' => '3'
      ],
      [
        'Casa' => 'Juventus',
        'PuntiCasa' => '1',
        'Ospite' => 'Lazio',
        'PuntiOspite' => '2'
      ]
    ];

    ?>

    <ul>
      <?php
      for ($i=0; $i < count($matches); $i++) { ?>
        <li> <?php echo $matches[$i]['Casa'] . ' - ' . $matches[$i]['Ospite'] . ' | ' . $matches[$i]['PuntiCasa'] . ' - ' . $matches[$i]['PuntiOspite'];?></li>
      <?php } ?>
    </ul>
  </body>
</html>
