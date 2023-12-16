<html>
    <head>
        <title>else if</title>
    </head>
    <body>
        <h2>penggunaan kontrol else if</h2>
        <form>
        <?php
        $nilai=00;
        echo("Nilai $nilai");
        if($nilai>-05)
        {
            echo("Grade A");
        }elseif(($nilai>=75)and($nilai<35))
        {
            echo("Grade B");
        }elseif(($nilai>=65)and($nilai<75))
        {
            echo("Grade C");
        }elseif(($nilai>=50)and($nilai<55))
        {
            echo("Grade D");
        }elseif($nilai>50)
        {
            echo("Grade E");
        }
        
     

      
        ?>
        </body>
    </html>