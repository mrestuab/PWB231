<html>
<head>
    <title>Tugas 1</title>
</head>
<h2>Latihan 1</h2>
<?php

function cekGanjilGenap($bilangan) {
    if ($bilangan % 2 == 0) {
        echo "<p> $bilangan adalah bilangan genap </p>";
    } else {
        echo "<p> $bilangan adalah bilangan ganjil </p>";
    }
}

$angka = 7; 
cekGanjilGenap($angka); 

$angka = 6; 
cekGanjilGenap($angka);

?>


<body>
    
</body>
</html>