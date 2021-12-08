<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php




    for ($i=1;$i<=100;$i++){
      if ($i==1 or $i % $i == 0){
        continue;
      }

      echo $i.'<br>';
    }

    ?>
  </body>
</html>
