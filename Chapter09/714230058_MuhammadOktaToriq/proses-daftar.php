<?php
include("config.php");
//Cek Tombol Daftar
if(isset($_POST['daftar'])){
    //Ambil data dari form
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenisKelamin'];
    $agama = $_POST['agama'];
    $umur = $_POST['umur'];
    //Query
    $sql = "INSERT INTO pendaftaran (nama,alamat,jenisKelamin,agama,umur) 
    VALUES ('$nama','$alamat','$jk','$agama','$umur')";
    $query = mysqli_query($db, $sql);
    if($query){
        header('Location: index.php?status=sukses');
    }
    else{
        header('Location: index.php?status=gagal');
    }
}
else{
    die("akses dilarang...");
}
?>