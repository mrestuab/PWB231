<html>
<head>
<title>Switch</title>
</head>
<body>
    <h2>Switch </h2>
    <?php
    $angka_mutu=3;
    echo("Angka mutu $angka_mutu<br>");
    switch($angka_mutu)
    {
        case 0: echo("huruf mutu E"); break;
        case 1: echo("huruf mutu D"); break;
        case 2: echo("huruf mutu C"); break;
        case 3: echo("huruf mutu B"); break;
        case 4: echo("huruf mutu A"); break;
        default: echo("Huruf mutu tidak dikenal");
    }
    ?>
    </body>
</html>