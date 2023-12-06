<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggunaan Kontrol Foreach</title>
</head>
<body>
    <h2>Penggunaan Kontrol Foreach</h2>
    <b>Nama Bulan: </b><br>
    <?php
    $i=0;
    $bulan = array("Januari","Februari","maret","April","mei","juni","juli","agustus","september","oktober","november","desember");
    foreach($bulan as $bln)
    {
        echo(($i+1). " $bln <br>");
        $i++;
    }
    ?>
</body>
</html>