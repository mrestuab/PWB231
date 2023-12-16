<html>

<head>
    <title>Jumlah Bilangan Genap dari 0 sampai 6</title>
</head>

<body>
    <h2>Latihan 2</h2>
    <?php
    //inisialisasi variabel jumlah
    $jumlah = 0;
    //Pengulangan untuk menjumlahkan bilangan genap dari 0 hingga 6
    for ($i = 0; $i <= 6; $i += 2) {
        $jumlah += $i;
    }
    //Menampilkan hasil
    echo "<p>Jumlah bilangan genap dari 0 hingga 6 adalah: $jumlah</p>";
    ?>
</body>

</html>