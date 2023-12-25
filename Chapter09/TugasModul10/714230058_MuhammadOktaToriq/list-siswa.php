<?php include ("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Skater Junior</title>
</head>
<body>
<div class="flex justify-center items-center w-screen h-96 bg-white"> 
    <div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
    <header class="font-bold uppercase text-4xl">
        <h3>Pendaftaran Skater junior</h3>
    </header>
    <nav class="uppercase text-sm font-bold tracking-wide bg-blue-900 text-gray-100 p-3 rounded-lg w-full 
                      focus:outline-none focus:shadow-outline">
        <a href="form-daftar.php">[+] Tambah Data</a>
    </nav>
    <table class=" border-collapse border border-slate-500 min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700 border-1 ">
        <thead class="bg-gray-100 dark:bg-gray-700">
            <tr>
                <th class="border border-slate-600">No</th>
                <th class="border border-slate-600">Nama</th>
                <th class="border border-slate-600">Alamat</th>
                <th class="border border-slate-600">Jenis Kelamin</th>
                <th class="border border-slate-600">Agama</th>
                <th class="border border-slate-600">Umur</th>
                <th class="border border-slate-600"></th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
            <?php
            $sql = "SELECT * FROM pendaftaran";
            $query = mysqli_query($db,$sql);
            while($siswa = mysqli_fetch_array($query)){
                echo"<tr>";
                echo"<td class='border border-slate-600 text-center px-8'>".$siswa['id']."</td>";
                echo"<td class='border border-slate-600 text-center px-8'>".$siswa['nama']."</td>";
                echo"<td class='border border-slate-600 text-center px-8'>".$siswa['alamat']."</td>";
                echo"<td class='border border-slate-600 text-center px-8'>".$siswa['jenisKelamin']."</td>";
                echo"<td class='border border-slate-600 text-center px-8'>".$siswa['agama']."</td>";
                echo"<td class='border border-slate-600 text-center px-8'>".$siswa['umur']."</td>";
                echo "<td class='border border-slate-600 text-center px-8'>";
                echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
                echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }  
            ?>
        </tbody>



    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>