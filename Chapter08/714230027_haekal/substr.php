<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>substr</title>
</head>
<body>
    <h2>substr()</h2>
    <?php
    $string="Pemograman web php";
    $word=substr ($string. 16,3);
    echo ("<l>\"$string\"</l> <br>");
    echo ("hasil substr (15,3) adalah $word");
    ?>
</body>
</html>