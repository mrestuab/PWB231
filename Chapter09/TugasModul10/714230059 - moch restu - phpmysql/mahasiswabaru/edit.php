<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-maba.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM pendaftaran WHERE id=$id";
$query = mysqli_query($db, $sql);
$maba = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Formulir Edit maba | ULBI</title>
</head>

<body class="bg-sky-400 flex">
<div class="mt-10 max-w-sm bg-white mb-10 m-auto p-10 rounded-md shadow-lg">

    <header>
        <h3 class="text-3xl text-center font-bold">Formulir Edit maba</h3>
    </header>

    <form class="mt-5" action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $maba['id'] ?>" />

        <p>
            <label class="block font-semibold text-sm" for="nama">Nama: </label>
            <input class="block mt-1 border border-gray-500 rounded-md" type="text" name="nama" placeholder="nama lengkap" value="<?php echo $maba['nama'] ?>" />
        </p>
        <br>
            <label class="block font-semibold text-sm" for="alamat">Alamat: </label>
            <textarea class="block mt-1 border border-gray-500 rounded-md" name="alamat"><?php echo $maba['alamat'] ?></textarea>
        <br>
            <label class="block font-semibold text-sm" for="jenis_kelamin">Jenis Kelamin: </label>
            <?php $jk = $maba['jenis_kelamin']; ?>
            <label><input class="cursor-pointer" type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
            <label><input class="cursor-pointer" type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
</br>
        <br>
            <label class="block font-semibold text-sm" for="agama">Agama: </label>
            <?php $agama = $maba['agama']; ?>
            <select class="cursor-pointer" name="agama">
                <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
                <option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
            </select>
</br>
        <br>
            <label class="block font-semibold text-sm" for="sekolah_asal">Sekolah Asal: </label>
            <input class="block mt-1 border border-gray-500 rounded-md" type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $maba['sekolah_asal'] ?>" />
</br>
        <p>
            <input class="bg-yellow-300 rounded-3xl py-3 px-8 font-medium inline-block mr-4 hover:bg-transparant hover:border-black-300 hover:text-black duration-300 hover:border border border-transparent cursor-pointer" type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>
        </div>
    </body>
</html>