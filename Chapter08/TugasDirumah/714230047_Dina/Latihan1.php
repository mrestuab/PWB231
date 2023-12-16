<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    <?php 
    function cekGanjilGenap($angka) {
        if ($angka %2 == 0) {
            echo "Angka $angka adalah bilangan Genap." ;
        } else {
            echo "Angka $angka adalah bilangan Ganjil." ;
        }
    }
    // conroh pemanggilan fungsi
    $angka = 7;
cekGanjilGenap($angka);
?>

</body>
</html>