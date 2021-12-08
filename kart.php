<?php
  $a=$_POST['a'];
  $b=$_POST['b'];
  $c=$_POST['c'];

  $delta = pow($b,2-4*$a*$c);
  $delta2 = sqrt($delta);
   echo "delta wynosi: ".$delta."<br>";


  if ($delta < 0){
    echo 'delta jest mniejsza od zera. Brak miejsc zerowych';

  }
  else if ($delta == 0){
    echo "wynik x: ".$x1=(-$b+$delta2)/(2*$a)."<br>";
    echo 'delta jest rowna zero';
  }
  else {
    echo "wynik x1: ".$x1=(-$b-$delta2)/(2*$a)."<br>";
    echo "wynik x2: ".$x2=(-$b+$delta2)/(2*$a)."<br>";
    echo 'delta jest wieksza od zera';
  }

 ?>
