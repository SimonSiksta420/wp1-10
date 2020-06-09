<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <h2> Příklad číslo 2 </h2>

  <?php
  
  for ($i=0; $i < 20; $i=$i+1) { 
      echo  $i;
      echo  ",";
      echo $i*$i;
      echo "<br>";
  }

  ?>
  
 <br> <h1> Start Rakety </h1> </br>
  <?php
  
  for ($i=10; $i > 0; $i=$i-1) { 
      echo  $i;
      echo "<br>";
  } ?>
  <br> Raketa letí </br>
  <?php
  define('MAX_NUMBER', 100);
  define('MIN_NUMBER', 0);
  define('NUMBERS_COUNT', 10);
  
  for ($i=0 ; $i < NUMBERS_COUNT; $i++ ) { 
      echo rand(MIN_NUMBER, MAX_NUMBER) . ","
  }
  ?>


</body>
</html>