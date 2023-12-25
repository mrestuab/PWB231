<?php
include("config.php");
// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}
//ambil id dari query string
$id = $_GET['id'];
// buat query untuk ambil data dari database
$sql = "SELECT * FROM pendaftaran WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);
// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <title>Formulir Edit Siswa | SkateSchool</title>
</head>
<body>
<div class="flex justify-center items-center w-screen h-screen bg-white">
    <div class="container mx-auto my-4 px-4 lg:px-20">
    <header class="flex">
        <h3 class="font-bold uppercase text-5xl">Formulir Edit Siswa</h3>
    </header>
    <form action="proses-edit.php" method="POST">
        <fieldset>
            <div class="w-full p-8 my-4 md:px-12 lg:w-9/12 lg:pl-20 lg:pr-40 mr-auto rounded-2xl shadow-2xl">
            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>"/>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" 
            class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat" class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"><?php echo $siswa['alamat'] ?></textarea>
        </p>
        <p>
            <label for="jenisKelamin">Jenis Kelamin: </label>
            <?php $jk = $siswa['jenisKelamin']; ?>
            <label><input type="radio" name="jenisKelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
            <label><input type="radio" name="jenisKelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
        </p>
        <p class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline">
            <label for="agama">Agama: </label>
            <?php $agama = $siswa['agama']; ?>
            <select name="agama" >
                <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
                <option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
            </select>
        </p>
        <p>
                <label for="umur">Umur: </label>
                <input type="number" name="umur" placeholder="Umur" class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"/>
            </p>
        <p class="my-2 w-1/2 lg:w-1/4">
            <input type="submit" value="Simpan" name="simpan" class="uppercase text-sm font-bold tracking-wide bg-blue-900 text-gray-100 p-3 rounded-lg w-full 
                      focus:outline-none focus:shadow-outline" />
        </p>
        </div>
        </fieldset>
    </form>
    </div>
</div>
    </body>
</html>