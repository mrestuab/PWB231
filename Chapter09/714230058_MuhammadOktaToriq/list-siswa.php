<?php include ("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Skater Junior</title>
</head>
<body>
    <header>
        <h3>Pendaftaran Skater junior</h3>
    </header>
    <nav>
        <a href="form-daftar.php">[+] Tambah Data</a>
    </nav>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Umur</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM pendaftaran";
            $query = mysqli_query($db,$sql);
            while($siswa = mysqli_fetch_array($query)){
                echo"<tr>";
                echo"<td>".$siswa['id']."</td>";
                echo"<td>".$siswa['nama']."</td>";
                echo"<td>".$siswa['alamat']."</td>";
                echo"<td>".$siswa['jenisKelamin']."</td>";
                echo"<td>".$siswa['agama']."</td>";
                echo"<td>".$siswa['umur']."</td>";
                echo "<td>";
                echo "<a href='form-edit.php?id".$siswa['id']."'>edit</a>";
                echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }  
            ?>
        </tbody>



    </table>
    
</body>
</html>