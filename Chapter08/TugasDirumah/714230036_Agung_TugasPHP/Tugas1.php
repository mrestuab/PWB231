<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Bilangan Ganjil atau Genap</title>
</head>
<body>
    <h2>Cek Bilangan Ganjil atau Genap</h2>

    <?php
    function cekGanjilGenap($angka) {
        if ($angka % 2 == 0) {
            return "Genap";
        } else {
            return "Ganjil";
        }
    }

    $inputAngka = 7; // Anda dapat mengubah angka di sini
    $hasil = cekGanjilGenap($inputAngka);
    ?>

    <p>Angka <?php echo $inputAngka; ?> adalah bilangan <?php echo $hasil; ?>.</p>

</body>
</html>
