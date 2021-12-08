<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tak</title>
  </head>
  <body>
    <?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $baza = "baza";

    $mysqli = new mysqli ($server, $user, $pass, $baza);

    if ($mysqli ->connect_errno){
      echo "niepolaczono".$mysqli -> connect_error;
      exit();
    }
    $zapytanie1 = 'SELECT `id`, `nazwa` FROM ryby WHERE 1 ;';
    $wynik = $mysqli-> query ($zapytanie1);

    echo <table>
    <tr><td>$liczba[1]</td><td>$liczba[2]</td></tr>
    <tr><td>$liczba[3]</td><td>$liczba[4]</td></tr>
    </table>'
     ?>
  </body>
</html>
