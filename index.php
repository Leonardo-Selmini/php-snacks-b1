<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 
  $matches = [
    [
      'home' => 'Inter',
      'away' => 'Milan',
      'goalHome' => '2',
      'goalAway' => '1'
    ],
    [
      'home' => 'Roma',
      'away' => 'Udinese',
      'goalHome' => '4',
      'goalAway' => '1'
    ],
    [
      'home' => 'Atalanta',
      'away' => 'Juventus',
      'goalHome' => '2',
      'goalAway' => '2'
    ],
    [
      'home' => 'Sassuolo',
      'away' => 'Torino',
      'goalHome' => '1',
      'goalAway' => '1'
    ],
    [
      'home' => 'Sampdoria',
      'away' => 'Fiorentina',
      'goalHome' => '1',
      'goalAway' => '3'
    ]
  ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP snacks</title>
</head>
<body>
  <ul>
      <?php
        for($i = 0; $i < count($matches); $i++){
          echo '<li style="margin: 2rem 0; list-style: none;">
          <p><strong>Partita:</strong> '.$matches[$i]['home'].' - '.$matches[$i]['away'].'</p>'.'<p><strong>Risultato:</strong> '.$matches[$i]['goalHome'].' - '.$matches[$i]['goalAway'].'</p>';
        }
      ?>

  </ul>
</body>
</html>