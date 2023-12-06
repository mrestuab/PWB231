<html>
<head>
  <title>String Methods</title>
</head>
<body>
  <h2>Penggunaan strln()</h2>
  <?php 
    $str = "Pemrograman Web PHP";
    $len = strlen($str);
    echo "<i>\"$str\"</i><br>";
    echo "Banyak karakter adalah $len";
  ?>

  <h2>Penggunaan substr()</h2>
  <?php
    $str = "Pemrograman Web PHP";
    $word = substr($str, 16, 3);
    echo "<i>\"$str\"</i><br>";
    echo "Hasil dari substr(16, 3) adalah $word";
    ?>

  <h2>Penggunaan strtolower()</h2>
  <?php
    $str = "Pemrograman Web PHP";
    $word = strtolower($str);
    echo "<i>\"$str\"</i><br>";
    echo "Hasil dari strtolower adalah <i>\"$word\"</i>";
    ?>

  <h2>Penggunaan ucfirst()</h2>
  <?php
    $str = "pemrograman Web PHP";
    $word = ucfirst($str);
    echo "<i>\"$str\"</i><br>";
    echo "Hasil dari ucfirst adalah <i>\"$word\"<i>";
    ?>
</body>
</html>