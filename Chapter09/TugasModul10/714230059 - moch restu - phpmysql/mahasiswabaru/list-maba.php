<?php include ("config.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Pendaftaran Mahasiswa Baru ULBI</title>
</head>
<body class="bg-sky-400 flex">
<div class="mt-40 max-w-max bg-white m-auto p-10 rounded-md shadow-lg">
    <header>
        <h1 class="text-3xl text-center font-bold">Pendaftaran Mahasiswa Baru</h1>
    </header>

    <nav>
        <a href="form-daftar.php">[+]Tambah Data</a>
    </nav>

    <br>

    <table class="border-collapse border-2 border-gray-500">
        <thead>
            <tr>
                <th class="border border-gray-400 p-2">No</th>
                <th class="border border-gray-400 p-2">Nama</th>
                <th class="border border-gray-400 p-2">Alamat</th>
                <th class="border border-gray-400 p-2">Jenis kelamin</th>
                <th class="border border-gray-400 p-2">Agama</th>
                <th class="border border-gray-400 p-2">Sekolah</th>
                <th class="border border-gray-400 p-2">Aksi</th>
            </tr>
        </thead>
        <tbody class="border-collapse border-2 border-gray-500">
            <?php
            $sql ="SELECT*FROM pendaftaran";
            $query=mysqli_query($db,$sql);

            while($maba = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$maba['id']."</td>";
                echo "<td>".$maba['nama']."</td>";
                echo "<td>".$maba['alamat']."</td>";
                echo "<td>".$maba['jenis_kelamin']."</td>";
                echo "<td>".$maba['agama']."</td>";
                echo "<td>".$maba['sekolah_asal']."</td>";

                echo "<td>";
                echo "<a href='edit.php?id=".$maba['id']."'>Edit</a>|";
                echo "<a href='hapus.php?id=".$maba['id']."'>Hapus</a>|";
                echo "</td>";
                echo "<tr>";
            }
            ?>
        </tbody>
    </table>
    <p>Total:<?php echo mysqli_num_rows($query)?></p>
        </div>
</body>
</html>