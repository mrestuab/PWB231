<html>
    <head>
        <title>Latihan 3</title>
</head>
<body>
    <h2>Latihan 3</h2>
    <?php
function hitungDiskonDanPembayaran($totalPembelian) {
    $diskon = 0;

    if ($totalPembelian >= 100000) {
        $diskon = 0.25; 
    } elseif ($totalPembelian >= 75000) {
        $diskon = 0.20; 
    } elseif ($totalPembelian >= 50000) {
        $diskon = 0.15; 
    } elseif ($totalPembelian >= 25000) {
        $diskon = 0.10; 
    } elseif ($totalPembelian >= 10000) {
        $diskon = 0.05; 
    }

    $totalDiskon = $totalPembelian * $diskon;
    $totalPembayaran = $totalPembelian - $totalDiskon;

    echo "Total Pembelian: Rp $totalPembelian<br>";
    echo "Diskon: Rp $totalDiskon<br>";
    echo "Total Pembayaran setelah diskon: Rp $totalPembayaran";
}
$totalPembelian = 120000;
hitungDiskonDanPembayaran($totalPembelian);
?>
</body>
</html>