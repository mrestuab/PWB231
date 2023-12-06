<html>
<head>
<title>For Each</title>
</head>
<body>
    <h2>Penggunaan Kontrol For Each</h2>
    <b>Nama Bulan:</b>
    <br>
        <?php
            $i=0; 
            $bulan=array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
            foreach ($bulan as $bln)
            {
                echo (($i+1)." $bln <br>");
                $i++;
            }
        ?>
</body>
</html>