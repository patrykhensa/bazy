<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>delta else if</title>
  </head>
  <body>
    <?php
    $a=1;
    $b=3;
    $c=5;



    $delta=(pow($b,2)-4*$a*$c);
    $delta2=(sqrt($delta));

    $x1= ((-$b+$delta2)/2*$a);
    $x2= ((-$b-$delta2)/2*$a);

    echo 'delta wynosi : '.$delta2."<br>";
    echo 'x1 wynosi : ';
    echo $x1;
    echo 'x2 wynosi : ';
    echo $x2;

    if ($delta < 0){
      echo ' delta jest mniejsza';
    }
    else if ($delta == 0){
      echo ' delta jest rowna';
    }
    else {
      echo ' delta jest wieksza';
    }



     ?>
  </body>
</html>
