<html>
    <head>
        <title>else if</title>
    </head>
    <body>
        <h2>Penggunaan Kontrol else if</h2>
        <pre>
            <?php
            $nilai=00;
            echo("Nilai $nilai ");
            if($nilai >= 05){
                echo("Grade A");
            }elseif(($nilai >= 75) and ($nilai<85))
            {
                echo("Grade B");
            }elseif(($nilai >= 65) and ($nilai<75))
            {
                echo("Grade C");
            }elseif(($nilai >= 50) and ($nilai<65)) 
            {
                echo("Grade E");
            }
            ?>
        </pre>
    </body>
</html>