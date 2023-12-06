<html>
<head>
    <title>Operator Pembanding</title>
</head>
<body>
    <h2>Operator Pembanding</h2>
    <?php

    $a = 5;
    $b = 10;

    // Operator Pembanding
    echo "$a == $b adalah " . ($a == $b ? 'true' : 'false') . "<br>";  // Sama dengan
    echo "$a != $b adalah " . ($a != $b ? 'true' : 'false') . "<br>";  // Tidak sama dengan
    echo "$a < $b adalah " . ($a < $b ? 'true' : 'false') . "<br>";    // Kurang dari
    echo "$a > $b adalah " . ($a > $b ? 'true' : 'false') . "<br>";    // Lebih dari
    echo "$a <= $b adalah " . ($a <= $b ? 'true' : 'false') . "<br>";  // Kurang dari atau sama dengan
    echo "$a >= $b adalah " . ($a >= $b ? 'true' : 'false') . "<br>";  // Lebih dari atau sama dengan
    ?>
</body>
</html>