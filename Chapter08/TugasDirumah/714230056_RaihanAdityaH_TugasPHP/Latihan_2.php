<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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