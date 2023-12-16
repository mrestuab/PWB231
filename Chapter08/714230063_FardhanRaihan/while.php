<html>
    <head>
        <title>while</title>
    </head>
    <body>
        <h2>penggunaan kontrol while</h2>
        <?php
       $hari=array("senin" , "selasa", "rabu" , "kamis" , "jumat" , "sabtu" , "minggu");
       $i=0;
       while($i<count($hari))
       {
        echo ("Hari ke ".($i+1)." adalah ".$hari[$i]."<br>");
        $i++;
       }



        ?>
        </body>
    </html>