<html>
<head>
    <title>Tugas 3</title>
</head>
<h2>Latihan 3</h2>
<body>
<?php 
        $pembelian = 75000;
        $diskon = 0;
        $keterangan_diskon = "";

        if ($pembelian >= 100000) {
            $diskon = $pembelian * (25 / 100);
            $keterangan_diskon = "Diskon 25%";
        } elseif ($pembelian >= 75000) {
            $diskon = $pembelian * (20 / 100);
            $keterangan_diskon = "Diskon 20%";
        } elseif ($pembelian >= 50000) {
            $diskon = $pembelian * (15 / 100);
            $keterangan_diskon = "Diskon 15%";
        } elseif ($pembelian >= 25000) {
            $diskon = $pembelian * (10 / 100);
            $keterangan_diskon = "Diskon 10%";
        } elseif ($pembelian >= 10000) {
            $diskon = $pembelian * (5 / 100);
            $keterangan_diskon = "Diskon 5%";
        }

        $pembayaran = $pembelian - $diskon;
    ?>

    <pre>
        Total Pembelian  = Rp. <?= number_format($pembelian, 0, ',', '.'); ?><br>
        <?= $keterangan_diskon ?> = Rp. <?= number_format($diskon, 0, ',', '.'); ?><br>
        Total Pembayaran = Rp. <?= number_format($pembayaran, 0, ',', '.'); ?>
    </pre>
    
</body>
</html>