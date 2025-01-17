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

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputAngka = $_POST["angka"];

        if (is_numeric($inputAngka)) {
            $hasil = cekGanjilGenap($inputAngka);

            echo "<p>Angka $inputAngka adalah bilangan $hasil.</p>";
        } else {
            echo "<p>Input bukan angka. Silakan masukkan angka.</p>";
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="angka">Masukkan Angka:</label>
        <input type="text" id="angka" name="angka" required>
        <button type="submit">Cek</button>
    </form>

</body>
</html>