<html>
    <head>
        <title>Tipe Data Object</title>
    </head>
    <body>
        <h2>Tipe Data Objek</h2>
        <?php
        class Test {
            var $str = "Variabel Class";
            function set_vars($str){
                $this->str=$str;
            }
        }
        $class = new Test;
        echo $class->str;
        $class->set_vars("Variabel Object");
        echo("<br>");
        echo $class->str;
        ?>
    </body>
</html>