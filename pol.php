<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>polaczenie</title>
  </head>
  <body>
    <?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $baza = "baza";

    $mysqli = new mysqli ($server, $user, $pass, $baza);

    if ($mysqli -> connect_errno){
    echo "niepolaczone". $mysqli -> connect_error;
    exit();
  }
  $zapytanie1 = 'SELECT `id`,`nazwa`,`wystepowanie`,`styl_zycia`  FROM `ryby` WHERE 1 ;';
  $wynik1 = $mysqli->query($zapytanie1);
  $wynik2 = $mysqli->query($zapytanie1);

  echo '<h2>skrypt 2 - fetch_assoc()<br></h2>';
echo '<ul>';
if ($wynik1->num_rows > 0){
    while ($rekord = $wynik1->fetch_assoc()){
      echo "<li>".$rekord["id"]."&nbsp;".$rekord["nazwa"]."&nbsp;".$rekord["wystepowanie"]."</li>";
    }
  }
echo '</ul>';

echo '<h2>skrypt 2 - fetch_row()<br></h2>';
echo '<ul>';
        if ($wynik2->num_rows > 0){
          while ($rekord = $wynik2 -> fetch_row()){
            echo "<li>".$rekord[0]."&nbsp;".$rekord[1]."&nbsp;".$rekord[2]."</li>";
          }
        }
echo '</ul>';
     ?>
  </body>
</html>
