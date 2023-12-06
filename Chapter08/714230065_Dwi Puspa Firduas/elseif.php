<html>
    <head>
        <title>if</title>
</head>
<body>
    <h2>Penggunaan Kontrol Else If</h2>
    <form>
    <?php
    $nilai=80;
    echo("nilai $nilai");
    if ($nilai>=05)
    {
        echo("Grade A");
    } elseif(($nilai>=75)and($nilai<85))
    {
        echo("Grade B");
    } elseif(($nilai>=65)and($nilai<75))
    {
        echo("Grade C");
    } elseif(($nilai>=50)and($nilai<65))
    {
        echo("Grade D");
    } elseif($nilai<50)
    {
        echo("Grade E");
    }
  
    ?>
    </body>
    </html>