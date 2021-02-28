<?php

$matches = [
  'Match1' => [
    'Casa' => 'Atalanta',
    'PuntiCasa' => '2',
    'Ospite' => 'Benevento',
    'PuntiOspite' => '0'
  ],
  'Match2' => [
    'Casa' => 'Bologna',
    'PuntiCasa' => '3',
    'Ospite' => 'Cagliari',
    'PuntiOspite' => '3'
  ],
  'Match3' => [
    'Casa' => 'Crotone',
    'PuntiCasa' => '3',
    'Ospite' => 'Fiorentina',
    'PuntiOspite' => '1'
  ],
  'Match4' => [
    'Casa' => 'Genoa',
    'PuntiCasa' => '2',
    'Ospite' => 'Inter',
    'PuntiOspite' => '3'
  ],
  'Match5' => [
    'Casa' => 'Juventus',
    'PuntiCasa' => '1',
    'Ospite' => 'Lazio',
    'PuntiOspite' => '2'
  ]
];

foreach ($matches as $interno) {

    if (is_array($interno)){

        foreach ($interno as $valore) {

            echo $valore;
        }
    } else {

        echo $interno;
    };
};
