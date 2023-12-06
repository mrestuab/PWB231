<html>
    <head>
        <title>for</title>
    </head>
    <body>
        <h2> Penggunaan Kontrol For</h2>
        <b>Nama Bulan : </b><br>
        <?php
        $bulan=array("Januari","februari","maret","april","nei","juni","juli","agustus","september","oktober","november","desember");
        for($i=0;$i<count($bulan) ;$i++)
        {
            echo(($i+1) ." $bulan[$i] <br>");
        }
        ?>
    </body>
</html>