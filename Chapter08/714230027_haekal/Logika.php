<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logika</title>
</head>
<body>
    <h2>Operator Logika</h2>
    <?php
    $a = 4;
    $b = 90;
    
    $c = $a && $b;
    echo var_export($c, true);
    
    $d = $a || $b;
    echo var_export($d, true);
    ?>
    
</body>
</html>