<html>
<head>
    <title>Object</title>
</head>
<body>
    <h2>Object</h2>
    <?php
   class xammp{
    var $str="Variable Class";
    function set_var($str)
    {
        $this->str=$str;
    }

   }
   $class=new xammp;
   echo $class->str;
   $class->set_var("Variable Object");
   echo ("<br>");
   echo $class->str;
    ?>
</body>
</html>
