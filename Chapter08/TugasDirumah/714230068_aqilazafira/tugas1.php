<html>

<head>
    <title>Cek Bilangan Ganjil atau Genap</title>
</head>

<body>
    <h2>Cek Bilangan Ganjil Dan Genap</h2>
    <?php
    //Fungsi untuk mengecek bilangan ganjil atau genap
    function cekGanjilGenap($angka)
    {
        if ($angka % 2 == 0) {
            return "Genap";
        } else {
            return "Ganjil";
        }
    }
    //Memeriksa apakah formulir dikirimkan
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Mengambil nilai angka dari formulir
        $inputAngka = $_POST["angka"];
        //Memastikan bahwa input adalah angka
        if (is_numeric($inputAngka)) {
            //Menentukan apakah angka tersebut ganjil atau genap
            $hasil = cekGanjilGenap($inputAngka);
            //Menampilkan hasil
            echo "<p>Angka $inputAngka adalah bilangan $hasil.</p>";
        } else {
            echo "<p>Input bukan angka. Silahkan masukkan angka. </p>";
        }
    }
    ?>
    <!-- Formulir untuk memasukkan angka -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="angka">Masukkan Angka:</label>
        <input type="text" id="angka" name="angka" required>
        <button type="submit">Cek</button>
    </form>
</body>

</html>