<html>
<head>
<title>Latihan 1</title>
</head>
<body>
    <h2>Latihan 1</h2>
        <?php 
        $angka=18;
        echo ("Angka $angka adalah angka ");
            function check($angka) {
                if ($angka % 2 == 0)
                {
                    echo ("genap");
                } else
                {
                    echo ("ganjil");
                }
            }
            check($angka)
        ?>
</body>
</html>