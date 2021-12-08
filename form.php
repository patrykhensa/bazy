<!DOCTYPE html>
<html lang=pl dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="form.php" method="post">
      <input type="number" name="liczba1">
      <input type="number" name="liczba2">
      <input type="submit" name="Wyslij" value="Prześlij">
    </form>

  <?php
    $a=$_POST['liczba1'];
    $b=$_POST['liczba2'];

    echo "dla liczb $a oraz $b <br>";
    echo "<strong>Suma: </strong>".($a+$b)."<br>";
    echo "Różnica: ".($a-$b)."<br>";
    echo "iloczyn: ".($a*$b)."<br>";
    echo "iloraz: ".($a/$b)."<br>";

  ?>
  </body>
</html>
