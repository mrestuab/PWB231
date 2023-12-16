<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tes Bilangan Ganjil atau Genap</title>
</head>
<body>

    <!-- Latihan 1 -->

    <h2>Tes Bilangan Ganjil atau Genap</h2>

    <?php
    function cekGanjilGenap($nomor) {
        if ($nomor % 2 == 0) {
            return "Genap";
        } else {
            return "Ganjil";
        }
    }

    // Memeriksa apakah formulir dikirimkan
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai angka dari formulir
        $inputNomor = $_POST["angka"];

        // Memastikan bahwa input adalah angka
        if (is_numeric($inputNomor)) {
            // Menentukan apakah angka tersebut ganjil atau genap
            $hasil = cekGanjilGenap($inputNomor);

            // Menampilkan hasil
            echo "<p>Angka $inputNomor adalah bilangan $hasil.</p>";
        } else {
            echo "<p>Input bukan angka. Silakan masukkan angka.</p>";
        }
    }
    ?>

    <!-- Memasukkan angka -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="angka">Masukkan Angka:</label>
        <input type="text" id="angka" name="angka" required>
        <button type="submit">Check</button>
    </form>

</body>
</html