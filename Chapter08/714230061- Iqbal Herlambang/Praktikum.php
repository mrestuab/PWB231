<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    echo("Echo"); 
    echo("<br>"); 
    echo("Print"); 
    
    //Cara menggunakan komentar yaitu menggunakan //


    // Variable
    $var1="Hallo";
    $var2=1;
    $_var3=3.14;
    echo("<h3>type data PHP</h3>");
    
    //Type Data
    echo("\$var1 = ".$var1."<br>");
    echo("\$var2 = ".$var2."<br>");
    echo("\$var3 = ".$_var3."<br>");
    echo("Type data \$var1 adalah = ".gettype($var1) ."<br>");
    echo("Type data \$var2 adalah = ".gettype($var2) ."<br>");
    echo("Type data \$var3 adalah = ".gettype($_var3) ."<br>");
    
    echo("<h3>Type Data Array</h3>");
    
    $hari=array("senin","selasa","rabu","kamis","jumat","sabtu","minggu");
    echo("Hari 1 adalah ".$hari[0]."<br>");
    echo("Hari 2 adalah ".$hari[1]."<br>");
    echo("Hari 3 adalah ".$hari[2]."<br>");
    echo("Hari 4 adalah ".$hari[3]."<br>");
    echo("Hari 5 adalah ".$hari[4]."<br>");
    echo("Hari 6 adalah ".$hari[5]."<br>");
    echo("Hari 7 adalah ".$hari[6]."<br>");

    echo("<h3>Type Data Object</h3>");
    class test{
        var $str="Variable Class";
        function set_vars($str){
           $this->str = $str;
        }
    }
    $class =new test;
    echo $class->str;
    $class->set_vars("Variable Objek");
    echo("<br>");
    echo $class->str;


echo("<h3>Penggunaan Aritmatika</h3>");
$a=7;
$b=2;
echo("Hasil dari $a + $b adalah ".($a+$b)."<br>");
echo("Hasil dari $a - $b adalah ".($a-$b)."<br>");
echo("Hasil dari $a * $b adalah ".($a*$b)."<br>");
echo("Hasil dari $a / $b adalah ".($a/$b)."<br>");
echo("Hasil dari $a % $b adalah ".($a%$b)."<br>");

echo("<h3>Struktur kontrol</h3>");
echo("<h3>if</h3>");

$umur=18;
echo("umur Anda $umur <br>");
if ($umur >= 17) {
    echo("Anda boleh masuk");
}


echo("<h3>if else</h3>");
$umur=18;
echo("umur Anda $umur <br>");
if ($umur >= 17) {
    echo("Anda boleh masuk");
}else{
    echo("Anda tidak boleh masuk");
}


echo("<h3>else if</h3>");
$nilai =80;
echo("Nilai  $nilai");
if ($nilai >= 05) {
echo("Grade A");
}else if($nilai >=75 and $nilai <85){
    echo("Grade B");

}else if($nilai >=65 and $nilai <75){
    echo("Grade c");

}else if($nilai >=50 and $nilai <55){
    echo("Grade D");

}else if($nilai <50){
    echo("Grace E");
    
}


echo("<h3>switch</h3>");
$angka_mn = "3";
echo(  "Angka mutu $angka_mn <br/>");
switch ($angka_mn) {
    case '0':
        echo("Hurud mutu E");
        break;
    
    case '1':
        echo("Hurud mutu D");
        break;
    
    case '2':
        echo("Hurud mutu C");
        break;
    
    case '3':
        echo("Hurud mutu B");
        break;
    
    case '4':
        echo("Hurud mutu A");
        break;
    
    default:
        # code...
        break;
}


echo("<h3>While</h3>");
 $hari=array("senin","selasa","rabu","kamis","jumat","sabtu","minggu");
 $i=0;
 while ($i < count($hari)) {
    echo ("Hari ke".($i+1)."adalah".$hari[$i]."<br>");
    $i++;
 }

echo("<h3>Do While</h3>");
$i=0;
$var=0;
do {
    $var=3;
    echo("$var");
    $i++;
} while ($i <= 4);


echo("<h3>For</h3>");
$bulan = array(
    "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oktober",
    "November",
    "Desember"
);
for($i=0;$i<count($bulan);$i++){
    echo(($i+1)." $bulan[$i] <br>");
}



echo("<h3>Foreach</h3>");
$bulan = array(
    "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oktober",
    "November",
    "Desember"
);

foreach ($bulan as $bln) {
    echo(($i+1)." $bln <br>");
    $i++;

}

echo("<h3>Fucntion</h3>");
function hitung($c,$b) {
$hasil = $c+$b;
return $hasil;
}
echo(
"4 + 3 =".hitung($c,$b)
);


echo("<h3>strlen</h3>");
$string = "Pemprograman web PHP";
$jml= strlen($string);
echo("<h5>$string</h5> <br/>");
echo ("Banyak karakter adalah $jml");

echo("<h3>substr</h3>");
$string3 = "Pemprograman web PHP";
$word= strtolower($string3);
echo("<h5>$string3</h5> <br/>");
echo ("Banyak karakter adalah <i>\"$word\"<i>");


echo("<h3>substr</h3>");
$string2 = "Pemprograman web PHP";
$word= substr($string2,16,3);
echo("<h5>$string2</h5> <br/>");
echo ("Banyak karakter adalah $word");


echo("<h3>Ucfirst</h3>");
$string4 = "Pemprograman web PHP";
$word= ucfirst($string4);
echo("<i>\"$string4\"</i> <br/>");
echo ("Banyak uc first adalah <i>\"$word\"<i>");

    ?>
</body>
</html>

