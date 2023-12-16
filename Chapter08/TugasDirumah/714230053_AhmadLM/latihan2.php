<html>
<head>
<title>Latihan 2</title>
</head>
<body>
    <h2>Latihan 2</h2>
        <?php 
        echo ("Akumulasi bilangan genap dari 0 s.d. 6 adalah "); 
            $angka=0;
            $var=0;
            do {
                $var+=2;
                $angka++;
            } while ($angka<=3);
            echo ($angka+$var);
        ?>
</body>
</html>