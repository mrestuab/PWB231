<!DOCTYPE HTM;>
<html>
    <head>
</head>
<body>
    <h2>Latihan 1</h2>
    <?php
    $tampil = "";
    function cekGanjilGenap($angka) {
        if ($angka % 2 == 0) {
            echo "$angka adalah bilangan genap";
        } else {
            echo "$angka adalah bilangan ganjil";
        }
    }
   $angkaContoh = 7;
   cekGanjilGenap($angkaContoh);
   ?>