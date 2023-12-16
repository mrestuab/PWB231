<!DOCTYPE html>
<head>
    <title>Latihan 2</title>
</head>
<body>
    <?php 
    $jumlahGenap = 0;
    for ($i = 0; $i <= 6; $i += 2) {
        $jumlahGenap += $i;
    }
    echo "Jumlah bilangan genap dari 0 sampai 6 adalah: $jumlahGenap";
    ?>
</body>
</html>