<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php Snacks</title>
</head>
<body>

  <!-- PSNACK 1
  Creiamo un array ‘matches’ contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.Stampiamo a schermo tutte le partite con questo schema:Olimpia Milano - Cantù | 55-60  -->
  <?php
  $matches = array(
    [
      home => 'Pippo Baudo team',
      away => 'Jerry Scotty team',
      homePoint => 120,
      awayPoint => 100
    ],
    [
      home => 'Barbara D\'Urso team',
      away => 'Paola Perego team',
      homePoint => 150,
      awayPoint => 110
    ],
    [
      home => 'Cristian De Sica team',
      away => 'Massimo Boldi team',
      homePoint => 160,
      awayPoint => 60
    ],
    [
      home => 'Matflix team',
      away => 'Mattflix team',
      homePoint => 185,
      awayPoint => 180
    ]
    );
  ?>

  <h3>PSnack 1</h3>
  <ul>
  <?php for ($i = 0; $i < count($matches); $i++){ ?>
    <li>
    <?php echo $matches[$i]['home']; ?> - <?php echo $matches[$i]['away']; ?> |
    <?php echo $matches[$i]['homePoint']; ?>-<?php echo $matches[$i]['awayPoint']; ?> 
    </li>
  <?php }?>
  </ul> 

  <!-- PHP Snack 2:
  Passare come parametri GET name, mail e age e verificare (cercando i metodi che nonconosciamo nella documentazione) che:
  1. name sia più lungo di 3 caratteri,
  2. che mail contenga un punto e una chiocciola
  3. e che age sia un numero.Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->



</body>
</html>