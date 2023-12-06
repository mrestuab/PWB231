<html>
<head>
    <title>IF</title>
</head>
<body>
    <h2>Penggunaan Kontrol While</h2>
    <form>
    <?php
    $hari = array("Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
    $i = 0;
    while ($i < count($hari))
    {
        echo("Hari ke " . ($i + 1) . " adalah " . $hari[$i] . "<br>");
        $i++;
    }
    ?>
    </form>
</body>
</html>
