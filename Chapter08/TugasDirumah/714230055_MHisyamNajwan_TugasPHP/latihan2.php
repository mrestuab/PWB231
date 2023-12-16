<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <h2>Latihan 2</h2>

    <?php
$jumlah = 0;
for ($i = 0; $i <= 6; $i += 2) {
    $jumlah += $i;
}
echo "Akumulasi bilangan genap dari 0 s.d 6 adalah : " . $jumlah;
?>

</body>
</html>