<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Akumulasi bilangan genap dari 0 sampai 6 adalah </h2>

<?php
$jumlah = 0;

for ($i = 0; $i <= 6; $i += 2) {
    $jumlah += $i;
}

echo "<p>Akumulasi bilangan genap dari 0 sampai 6 adalah : $jumlah</p>";
?>

</body>
</html>