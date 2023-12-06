<html>
    <head>
        <title>Fungsi : string</title>
    </head>
    <body>
        <h2> Fungsi : String Substr</h2>
        <?php
        $string="pemrograman Web PHP";
        $word=substr($string,16,3);
        echo("<1>\"$string\"</1> <br>");
        echo("Hasil substr (15,3) adalah $word");
        ?>
    </body>
</html>