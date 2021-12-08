<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
$tab1 = array('a'=>'206', 'c'=>'punto', 'b'=>'focus');
asort ($tab1);

$tab2 ['Imie']='Patryk';
echo '<br>';
$tab2 ['Nazwisko']='Hensa';
echo '<br>';
print_r ($tab1);
echo '<br>';
print_r ($tab2);



?>

  </body>
</html>
