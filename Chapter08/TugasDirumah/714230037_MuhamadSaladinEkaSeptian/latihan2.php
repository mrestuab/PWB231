<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Latihan 2</h2>
  <?php
    $start = 0;
    $end = 6;
    $sum = 0;
    for ($i = $start; $i <= $end; $i++) { 
      $sum = $i % 2 == 0 ? $sum + $i : $sum;
    }
    echo "Akumulasi bilangan genap dari $start s.d $end adalah " . $sum;
  ?> 
</body>
</html>