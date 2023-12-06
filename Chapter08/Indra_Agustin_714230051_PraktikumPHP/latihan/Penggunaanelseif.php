<html>
<head>
    <title>IF</title>
</head>
<body>
    <h2>Pengguaan IF Else</h2>
    <form>
    <?php
   $nilai = 80; // inisialisasi nilai
   echo("Nilai $nilai");
   if ($nilai > 90) {
       echo(" Grade A");
   } elseif ($nilai >= 75 && $nilai < 90) {
       echo(" Grade B");
   } elseif ($nilai >= 65 && $nilai < 75) {
       echo(" Grade C");
   } elseif ($nilai >= 55 && $nilai < 65) {
       echo(" Grade D");
   } elseif ($nilai < 55) {
       echo(" Grade E");
   }
    ?>
    </form>
</body>
</html>