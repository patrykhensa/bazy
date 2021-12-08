<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Eksplode / implode</title>
  </head>
  <body>
<?php
$collors


 ?>

<?php

  // $tekst ="To jest przykładowy tekst";
  // echo $tekst;
  // echo '<br>';
  // $tablica = explode(" ", $tekst);
  //
  // print_r($tablica);
  // echo '<br>';
  // rsort($tablica);
  // print_r($tablica);
  // echo '<br>';
  // asort($tablica);
  // print_r($tablica);

  echo '<br><br><br>';

  $tab = array('Nie', 'wiem', 'co', 'tu', 'napisać');
  print_r($tab);
  echo '<br>';
  $napis = implode(" ", $tab);
  echo $napis.'<br>';
 ?>

  </body>
</html>
