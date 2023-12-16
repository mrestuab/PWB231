<!DOCTYPE HTM;>
<html>
    <head>
</head>
<body>
    <h2>Latihan 3</h2>
    <?php
    function hitungDiskonDanPembayaran($pembelian)
    {

        if ($pembelian >= 100000)
         {
            $diskon = 0.25; 
         }elseif($pembelian>=75000)
        {
            $diskon = 0.20;
        }elseif($pembelian>=50000)
        {
            $diskon=0.15;
        }elseif($pembelian>=25000)
        {
            $diskon=0.10;
        }elseif($pembelian>=10000)
        {
            $diskon=0.05;
        }else {
            $diskon = 0;
        }
        $jumlahDiskon = $pembelian * $diskon;
        $pembayaran = $pembelian - $jumlahDiskon;
        
        echo "Total Pembelian: Rp $pembelian<br>";
        echo "Diskon = Rp $jumlahDiskon<br>";
        echo "Total Pembayaran = Rp $pembayaran";
    }
    $pembelian = 85000;
    hitungDiskonDanPembayaran($pembelian);
   ?>
   </body>
   </html>