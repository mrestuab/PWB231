<html>
    <head>
        <title>Latihan 1</title>
</head>
<body>
    <h2>Latihan 1</h2>
    <?php
function cekGanjilGenap($angka) {
    if ($angka % 2 == 0) {
        echo "$angka adalah bilangan genap";
    } else {
        echo "$angka adalah bilangan ganjil";
    }
}

$angka1 = 10;
$angka2 = 7;

cekGanjilGenap($angka1);
echo "<br>";
cekGanjilGenap($angka2);
?>
</body>
</html>
    