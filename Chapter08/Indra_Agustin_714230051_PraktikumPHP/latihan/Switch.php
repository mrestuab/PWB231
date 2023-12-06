<html>
<head>
    <title>IF</title>
</head>
<body>
    <h2>Pengguaan Kontrol Switch</h2>
    <form>
    <?php
    $angka_mutu = 3;
    echo("Angka mutu $angka_mutu <br>");
    switch($angka_mutu){
    
        case 0; echo("Huruf mutu E"); break;
        case 1; echo("Huruf mutu D"); break;
        case 2; echo("Huruf mutu C"); break;
        case 3; echo("Huruf mutu B"); break;
        case 4; echo("Huruf mutu A"); break;
        default: echo("Huruf Mutu tidak dikenali");

    }
    ?>
    </form>
</body>
</html>