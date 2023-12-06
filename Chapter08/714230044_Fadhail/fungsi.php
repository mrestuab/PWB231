<html>
<head>
    <title>Struktur Penulisan PHP</title>
</head>
<body>
    <h2>Penggunaan Fungi</h2>
    <?php 
        function hitung($a,$b)
        {
            $hasil=$a+$b;
            return $hasil;
        }
        echo ("4 + 3 =".hitung(4,3));
    ?>
</body>
</html>