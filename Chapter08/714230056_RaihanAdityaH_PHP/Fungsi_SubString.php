<html>
<head>
    <title>Fungsi</title>
</head>
<body>
    <h2>Fungsi SubString</h2>
    <?php
    $string = "Pemrograman web php";
    $word = substr($string, 16, 3);
    echo("<i>\"$string\"</i> <br>");
    echo("Hasil substr (16,3) adalah $word ");
    ?>
</body>
</html>