<?php

include("config.php");
// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){
    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenisKelamin'];
    $agama = $_POST['agama'];
    $umur = $_POST['umur'];
    // buat query update
    $sql = "UPDATE pendaftaran SET nama='$nama', alamat='$alamat', jenisKelamin='$jk', agama='$agama', umur='$umur' WHERE id=$id";
    $query = mysqli_query($db, $sql);
    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list-siswa.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan..");
    }
} else {
    die("Akses dilarang...");
}
?>
