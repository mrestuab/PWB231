<html>
<head>
  <title>Control Structure</title>
</head>
<body>
  <h2>Penggunaan if...else...elseif Statement</h2>
  <?php 
    $nilai = 70;
    echo "Nilai $nilai ";
    if ($nilai >= 85) echo "Grade A";
    elseif ($nilai > 75 and $nilai < 85) echo "Grade B";
    elseif ($nilai > 65 and $nilai < 75) echo "Grade C";
    elseif ($nilai > 55 and $nilai < 65) echo "Grade D";
    else echo "Grade E";
  ?>
  <br>
  <h2>Penggunaan switch statement</h2>
  <?php
    $angla_mutu = 3;
    echo "Angka mutu $angla_mutu<br>Huruf mutu ";
    switch ($angla_mutu) {
      case 1: echo "D"; break;
      case 2: echo "C"; break;
      case 3: echo "B"; break;
      case 4: echo "A"; break;
      default: echo "tidak dikenal"; break;
    }
  ?>
</body>
</html>