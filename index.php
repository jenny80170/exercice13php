<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Exercice 13</title>
</head>
<body>
  <h1>Afficher les nombre impair de 0 à 300</h1>
  <?php
    for ($i = 1; $i < 100 ; $i ++){
    if (($i % 3)==0 and ($i % 5)!=0){
      echo 'fizz  ';
    }
    elseif (($i % 5)==0 and ($i % 3)!=0){
      echo 'buzz ';
    }
    elseif (($i % 3)==0 and ($i % 5)==0){
      echo 'fizzBuzz ';
    }
    else {
      echo $i. ' ';
    }
  }
  ?>
</body>
</html>
