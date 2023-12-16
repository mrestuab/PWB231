<!DOCTYPE html>
<head>
    <title>Latihan3</title>
</head>
<body>
    <h1>Latihan 3</h1>
    <?php
    $pembelian = 100000;
    $diskon = 0;
    if($pembelian >= 100000){
        $diskon = $pembelian*(25/100);
    }
    elseif($pembelian >=75000){
        $diskon = $pembelian*(20/100);
    }
    elseif($pembelian >=50000){
        $diskon = $pembelian*(15/100);
    }
    elseif($pembelian >=25000){
        $diskon = $pembelian*(10/100);
    }
    elseif($pembelian >=10000){
        $diskon = $pembelian*(5/100);
    }
    $pembayaran = $pembelian - $diskon;
    echo ("<pre>");
    echo("Total pembelian  = Rp.".$pembelian . "<br><br>");
    echo("Diskon           = Rp.".$diskon. "<br><br>");
    echo("Total pembayaran = Rp.".$pembayaran. "<br><br>");

    
    ?>
    
</body>
</html>