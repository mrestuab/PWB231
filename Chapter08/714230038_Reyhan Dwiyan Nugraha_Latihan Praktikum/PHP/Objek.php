<html>
<head>
<title>Objek</title>
</head>
<body>
    <h2>Tipe data Objek </h2>
    <?php
    class rey
    {
        var $str="Variabel Class";
        function set_var($str)
        {
            $this->str=$str;
        }
    }
    $class=new rey;
    echo $class->str;
    $class->set_var("Variabel Objek");
    echo ("<br>");
    echo $class->str;
    ?>
  
</body>
</html>