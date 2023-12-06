<html>
<head>
<title>For</title>
</head>
<body>
    <h2>Penggunaan Kontrol For</h2>
    <b>Nama Bulan:</b>
    <br>
        <?php 
            $bulan=array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
            for ($i=0; $i<count ($bulan); $i++)
            {
                echo (($i+1)." $bulan[$i] <br>");
            }
        ?>
</body>
</html>