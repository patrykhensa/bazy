<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Komis Samochodowy</title>
    <link rel="stylesheet" type="text/css" href="auto.css">
  </head>
  <body>

    <?php
      $serwer="localhost";
      $user="root";
      $password="";
      $baza="komis";
      $mysqli = new mysqli($serwer, $user, $password, $baza);

      if ($mysqli -> connect_errno){
        echo "Brak połączenia z MySQL";
        exit();
      }

      $zapytanie1 = 'SELECT `id`,`marka`,`model` FROM `samochody` WHERE 1 ;';
      $zapytanie2 = 'SELECT `Samochody_id`,`Klient` FROM `zamowienia` WHERE 1 ;';
      $zapytanie3 = 'SELECT * FROM `samochody` WHERE `marka`="fiat" ;';

      $wynik1 = $mysqli->query($zapytanie1);
      $wynik2 = $mysqli->query($zapytanie2);
      $wynik3 = $mysqli->query($zapytanie3);

     ?>


    <section id="baner">
      <h1>SAMOCHODY</h1>
    </section>

    <section id="lewy">
      <h2>Wykaz samochodów</h2>
      <!--skrypt 1-->
      <ul>
      <?php
        if ($wynik1->num_rows > 0){
          while ($rekord = $wynik1->fetch_assoc()){
            echo "<li>".$rekord["id"]."&nbsp;".$rekord["marka"]."&nbsp;".$rekord["model"]."</li>";
          }
        }
       ?>
     </ul>

      <h2>Zamówienia</h2>
      <!--skrypt 2-->
      <ul>
      <?php
        if ($wynik2){
          while ($rekord = $wynik2 -> fetch_row()){
            echo "<li>".$rekord[0]."&nbsp;".$rekord[1]."</li>";
          }
        }
       ?>
      </ul>

    </section>

    <section id="prawy">
      <h2>Pełne dane: Fiat</h2>
      <!--skrypt 3-->
      <?php
        if ($wynik3->num_rows > 0){
          while ($rekord = $wynik3->fetch_row()){
            echo $rekord["0"]." / ".$rekord["1"]." / ".$rekord["2"]." / ".$rekord["3"]." / ".$rekord["4"]." / ".$rekord["5"]." / "."<br>";
          }
        }
       ?>

    </section>

    <section id="stopka">
      <table>
        <tr>
          <td><a href="kwerendy.txt">Kwerendy</a></td>
          <td></td>
          <td><img src="auto.png" alt="komis samochodowy"</td>
        </tr>

      </table>

    </section>


<?php

$wynik1 -> free();
$wynik2 -> free();
$wynik3 -> free();

$mysqli->close();
?>




  </body>
</html>
