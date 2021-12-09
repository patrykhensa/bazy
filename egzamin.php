<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tytol</title>
    <link rel="stylesheet" href="egzamin.css">
  </head>
  <body>


    <div class="jeden"><h1>napis</h1></div>
    <div class="wrapper">
      <div class="dwa"><h2>mojecos</h2></div>
      <div class="kropki">



        <li>jeden <a href="#">dfghdfhdfhjdfgjh</a></li>
        <li>dwa</li>

      </div>
      <div class="trzy"><h2>mojeznaj</h2></div>
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
      $zapytanie1 = 'SELECT `id` , `marka`, `model` FROM `samochody` WHERE 1 ;';
      $wynik1 = $mysqli->query($zapytanie1);

      if ($wynik1->num_rows > 0){
          while ($rekord = $wynik1->fetch_assoc()){

          //  echo '<img src='.$rekord["id"].'.jpg alt="przyjaciel">';

            //echo '<div class="opis"><h1>Siema</h1><br><p>co tam</p></div>'
          echo ' <div class="obraz1">

            <img src='.$rekord["id"].'.png alt="przyjaciel"></div>
            <div class="opis"><h1>'.$rekord["marka"].'</h1><br><p>'.$rekord["model"].'</p></div>
            <div class="hr"><hr></div>
             ';




          }
        }
        ?>
      </div>
        <div class="stopka">
          <div class="lewo">00000000</div>
          <div class="prawo"><a class="a" href="ja@portal.pl">napisz</a></div>
      </div>

  </body>
</html>
