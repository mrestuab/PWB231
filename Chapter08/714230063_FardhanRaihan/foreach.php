<html>
    <head>
        <title>for</title>
    </head>
    <body>
        <h2>penggunaan kontrol foreach</h2>
        <b>Nama Bulan : </b><br>
        <?php
        $i=0;
       $bulan=array("januari" , "februari", "maret" , "aprli" , "mei" , "juni" , "juli" , "agustus" , "september",
       "oktober" ,"november" , "desember");
       foreach($bulan as $bln)
       {
        echo(($i+1)."$bln <br>");
        $i++;
       }



        ?>
        </body>
    </html>