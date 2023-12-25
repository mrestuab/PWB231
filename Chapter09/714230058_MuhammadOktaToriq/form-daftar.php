<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Skater Junior Baru | SkateSchool</title>
</head>
<body>
    <header>
        <h3>Formulir Pendaftaran Skater Junior</h3>
    </header>
    <form action="proses-daftar.php" method="POST">
        <fieldset>
            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="nama lengkap"/>
            </p>
            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat"></textarea>
            </p>
            <p>
                <label for="jenisKelamin">Jenis Kelamin: </label>
                <label><input type="radio" name="jenisKelamin" value="Laki-laki">Laki-laki</label>
                <label><input type="radio" name="jenisKelamin" value="Perempuan">Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama: </label>
                <select name="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Katholik</option>
                    <option>Buddha</option>
                    <option>Hindu</option>
                </select>
            </p>
            <p>
                <label for="umur">Umur: </label>
                <input type="number" name="umur" placeholder="Umur"/>
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar"/>
            </p>
        </fieldset>
    </form>
</body>
</html>