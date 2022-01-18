<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php 
// snack 1
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
  ];

    // snack 2
    $name = $_GET['nome'];
    $mail = $_GET['email'];
    $age = $_GET['eta'];
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
  <!-- snack 1 -->
  <h2>Snack 1</h2>
  <ul>
      <?php
        for($i = 0; $i < count($matches); $i++){
          echo '<li style="margin: 2rem 0; list-style: none;">
          <p><strong>Partita:</strong> '.$matches[$i]['home'].' - '.$matches[$i]['away'].'</p>'.'<p><strong>Risultato:</strong> '.$matches[$i]['goalHome'].' - '.$matches[$i]['goalAway'].'</p></li>';
        }
      ?>
  </ul>
  <!-- snack 2 -->
  <h2>Snack 2</h2>
  <ul>
  <?php
    echo '<li style="margin: 2rem 0; list-style: none;"><strong>Nome: </strong>'.$name.'</li>';
    echo '<li style="margin: 2rem 0; list-style: none;"><strong>Email: </strong>'.$mail.'</li>';
    echo '<li style="margin: 2rem 0; list-style: none;"><strong>Età: </strong>'.$age.'</li>';
    if (isset($name, $mail, $age) && strlen($name) > 3 && strpos($mail, '@') && strpos($mail, '.') && is_numeric($age)){
      echo '<li style="margin: 2rem 0; list-style: none;"><strong>Accesso Riuscito</strong></li>';
    } else {
      echo '<li style="margin: 2rem 0; list-style: none;"><strong>Accesso Negato</strong></li>';
    }
  ?>
  <!-- && strlen($name) > 3 && str_contains($mail, '@') && str_contains($mail, '.') && gettype($age) -->
  </ul>
</body>
</html>