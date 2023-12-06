<html>
<head>
  <title>Array and Loop</title>
</head>
<body>
  <h2>Working with array and loops</h2>
  <?php 
    echo "<b>Penggunaan kontrol for</b><br>";
    $days = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];
    $len = count($days);
    for ($i=0 ; $i < $len; $i++) { 
      echo "Hari " . $i + 1 . " adalah $days[$i] <br>";
    }

    // Penggunaan kontrol do while
    $i = 0;
    $dos = [];
    do {
      rand(0, 10) < 5 ? array_push($dos, "main") : array_push($dos, "tidur");
      $i++;
    } while ($i < $len);
    
    echo "<br>";

    echo "<b>Penggunaan kontrol foreach</b><br>";
    foreach ($days as $i => $day) {
      echo "Hari $day aku biasanya $dos[$i]<br>";
    }

    echo "<br><b>Penggunaan kontrol while</b><br>";
    echo "Nama Bulan: <br>";
    $months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
    $i = 0;
    while ($i < count($months)) {
      echo $i + 1 . ". $months[$i] <br>";
      $i++;
    }
  ?>
</body>
</html>