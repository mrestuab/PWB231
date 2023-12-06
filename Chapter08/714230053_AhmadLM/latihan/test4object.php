<html>
<head>
<title>Tipe Data Object</title>
</head>
<body>
    <h2>Tipe Data Object</h2>
    <?php 
        class test {
            var $str="Variable Class";
            function set_vars($str)
            {
                $this->str=$str;
            }
        }
        $class=new test;
        echo $class->str;
        $class->set_vars("Variable Object");
        echo ("<br>");
        echo $class->str;
    ?>
</body>
</html>