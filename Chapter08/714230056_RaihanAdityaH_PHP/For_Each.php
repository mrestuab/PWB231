<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Each PHP</title>
</head>
<body>
    <h2>For Each</h2>
    <?php
            $i=0; 
            $bulan=array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
            foreach ($bulan as $bln)
            {
                echo (($i+1)." $bln <br>");
                $i++;
            }
        ?>
    
</body>
</html>