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
      <div class="dwa">mojecos</div>
      <div class="kropki">


      <ul>
        <li>jeden</li>
        <li>dwa</li>
      </ul>
      </div>
      <div class="trzy">mojeznaj</div>
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

      if ($wynik1->num_rows > 0){
          while ($rekord = $wynik1->fetch_assoc()){

            echo '<img src="./tw.jpg" alt="przyjaciel">';
            //echo '<div class="opis"><h1>Siema</h1><br><p>co tam</p></div>'

//bghjghjfghjfg


            //echo "<li>".$rekord["id"]."&nbsp;".$rekord["nazwa"]."&nbsp;".$rekord["wystepowanie"]."</li>";
          }
        }
        ?>



      <!--div class="obraz1">

      <img src="100.png"></div>
      <div class="opis"><h1>Siema</h1><br><p>co tam</p></div>
      <div class="hr"><hr></div>
      <div class="obraz2">
      <img src="100.png"></div>
      <div class="opis2"><h1>No spoczko</h1><br><p>a co u ciebie? XDD</p></div>

    </div-->

    <div class="stopka">stopka


    </div>
  </body>
</html>
