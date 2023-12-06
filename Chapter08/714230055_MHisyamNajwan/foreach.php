<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOREACH</title>
</head>
<body>
    <h2>Kontrol FOREACH</h2>
    <b>Name Bulan : </b><br>
    <?php
    $i=0;
    $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
    foreach($bulan as $bln)
    {
        echo(($i+1)." $bln <br>");
        $i++;
    }
    ?>
</body>
</html>