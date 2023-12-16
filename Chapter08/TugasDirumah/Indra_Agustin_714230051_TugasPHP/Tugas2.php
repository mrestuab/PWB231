<html>
<head>
    <title>Tugas 2</title>
</head>
<h2> Latihan 2</h2>
<body>
<?php

$jumlah = 0;

for ($i = 0; $i <= 6; $i++) {
    if ($i % 2 == 0) {
        $jumlah += $i;
    }
}

echo "Jumlah bilangan genap dari 0 hingga 6 adalah: $jumlah";

?>


    
</body>
</html>