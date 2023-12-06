<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Else IF</title>
</head>
<body>
    <h2>Else if php_check_syntax</h2>
<?php 
            $nilai=80;
            echo ("Nilai $nilai ");
            if ($nilai>=15)
            {
                echo ("Grade A");
            } elseif (($nilai>=75)and($nilai<85))
            {
                echo ("Grade B");
            } elseif (($nilai>=65)and($nilai<75))
            {
                echo ("Grade C");
            } elseif (($nilai>=50)and($nilai<65))
            {
                echo ("Grade D");
            } elseif ($nilai<50)
            {
                echo ("Grade E");
            }
            
        ?>
</body>
</html>