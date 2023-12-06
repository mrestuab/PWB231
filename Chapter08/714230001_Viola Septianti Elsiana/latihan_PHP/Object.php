<html>
<head>
    <title>Tipe Data Object</title>
</head>
<body>
<h2>tipe data objek</h2>
    <?php
    class piol
    {
        var $str="variabel class";
        function set_var($str)
        {
            $this->str=$str;
        }
    }
    $class=new piol;
    echo $class->str;
    $class->set_var("Variabel Objek");
    echo ("<br>");
    echo $class->str;
    ?>
  
</body>
</html>