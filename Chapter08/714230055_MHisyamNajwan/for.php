<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOR</title>
</head>
<body>
    <b>Name Bulan : </b><br>
    <?php
    $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
    for($i=0;$i<count($bulan);$i++)
    {
        echo(($i+1)." $bulan[$i] <br>");
    }
    ?>
</body>
</html>