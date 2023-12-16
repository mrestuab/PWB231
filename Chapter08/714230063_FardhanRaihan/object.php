<html>
    <head>
        <title>tipe data object</title>
    </head>
    <body>
        <h2>tipe data object</h2>
        <?php
        class test
        {
            var $str="Variable Class";
            function set_vars($str)
            {
                $this->str=$str;
            }
        }
        $class=new test;
        echo $class->str;
        $class->set_vars("Variable Objek");
        echo ("<br>");
        echo $class->str;

        ?>
    </body>
</html>