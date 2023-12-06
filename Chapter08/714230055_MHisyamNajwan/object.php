<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tipe data object</title>
</head>
<body>
    <h2>tipe data objek</h2>
    <?php
    class Sam
    {
        var $str="variabel class";
        function set_var($str)
        {
            $this->str=$str;
        }
    }
    $class=new Sam;
    echo $class->str;
    $class->set_var("Variabel Objek");
    echo ("<br>");
    echo $class->str;
    ?>
</body>
</html>