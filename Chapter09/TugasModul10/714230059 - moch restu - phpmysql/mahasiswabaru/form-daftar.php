<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Pendaftaran Mahasiswa Baru | ULBI</title>
</head>
<body class="bg-sky-400 flex">
<div class="mt-10 max-w-sm bg-white mb-10 m-auto p-10 rounded-md shadow-lg">
        <h1 class="text-3xl text-center font-bold">Formulir Pendaftaran mahasiswa Baru <br> ULBI</h1>

    <form class="mt-5" action="proses.php" method="POST">
        <fieldset>
            <p>
                <label class="block" for="nama">
                    <span class="block font-semibold text-sm">Nama</span>
                <input type="text" class="block mt-1 border border-gray-500 rounded-md" name="nama" placeholder="nama lengkap" required/>
                </label>
            </p>
            <br>
                <label class="block" for="alamat">
                <span class="block font-semibold text-sm">Alamat:</span>
                <textarea class="block mt-1 border border-gray-500 rounded-md" name="alamat" required></textarea>
                </label>
            <br>
                <label for="jenis_kelamin"> 
                <span class="block font-semibold text-sm">Jenis Kelamin:</span>
                <label ><input class="cursor-pointer" type="radio" name="jenis_kelamin" for="jenis_kelamin" value="laki-laki">Laki-laki </label>
                <label ><input class="cursor-pointer" type="radio" name="jenis_kelamin" for="jenis_kelamin" value="perempuan">Perempuan </label>
                </label>            
            </br>
            <br>
                <label for="agama">
                <span class="block font-semibold text-sm">Agama:</span>
                <select class="cursor-pointer" name="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Atheis</option>
                </select>
                </label>
            </br>
            <br>
                <label class="block" for="sekolah_asal"> 
                <span class="block font-semibold text-sm">Sekolah Asal:</span>
                <input class="block mt-1 border border-gray-500 rounded-md" type="text" name="sekolah_asal" placeholder="nama sekolah" required>
                </label>
            <br>
                <input class="bg-yellow-300 rounded-3xl py-3 px-8 font-medium inline-block mr-4 hover:bg-transparant hover:border-black-300 hover:text-black duration-300 hover:border border border-transparent cursor-pointer" type="submit" value="Daftar" name="daftar">
        </fieldset>
    </form>
</div>
</body>
</html>