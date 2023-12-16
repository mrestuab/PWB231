<!DOCTYPE HTM;>
<html>
    <head>
</head>
<body>
    <h2>Latihan 2</h2>
    <?php
    $jumlahGenap = 0;
    for ($i = 0; $i <= 6; $i += 2) {
         $jumlahGenap += $i;
    }
            echo "Akumulasi bilangan genap dari 0 sd 6 adalah : $jumlahGenap";
      
   ?>