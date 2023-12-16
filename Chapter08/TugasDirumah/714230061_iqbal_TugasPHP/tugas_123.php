<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Latihan 1</h2>

    <?php 
    $nilai=11;
    if ($nilai % 2 == 0) {
    echo " $nilai adalah bilangan bulat" ;
    }else {
        echo " $nilai adalah bilangan bukan bulat" ;
    }
    ?>
    <h2>Latihan 2</h2>
    <?php 


    $nilai=0;
    for ($i=0; $i <=6 ; $i++) { 
        if ($i % 2 == 0) {
            $nilai += $i;
        }
    }
    echo "jumlah semua angka bilangan bulat dari 0-6 itu adalah $nilai";
    ?>

<h2>Latihan 3</h2>
<?php

$pembelian = 7000; // Assuming some value for pembelian

$diskon = 0;

if ($pembelian >= 1000000) {
    $diskon = $pembelian * (25 / 100);
} elseif ($pembelian >= 75000) {
    $diskon = $pembelian * (20 / 100);
} elseif ($pembelian >= 50000) {
    $diskon = $pembelian * (15 / 100);
} elseif ($pembelian >= 10000) {
    $diskon = $pembelian * (10 / 100);
} elseif ($pembelian >= 5000) {
    $diskon = $pembelian * (5 / 100);
}

$pembayaran = $pembelian - $diskon;

    echo ("<pre>");
    echo ("Total Pembelian = Rp.".$pembelian ."<br/>");
    echo ("Diskon = Rp ".$diskon."<br/>");
    echo ("Total Pembayaran = Rp $pembayaran")  ;
    echo ("</pre>");
?>

</body>
</html>