<html>
<head>
  <title>Function and Classes</title>
</head>
<body>
  <h2>Fungsi dan Objek</h2>
  <?php 
    class Human {
      public $name;
      function __construct($name) {
        $this->name = $name;
        echo "Nama saya $this->name dan saya seorang manusia<br>";
      }
      function walk($str) {
        return "Saya sedang berjalan ke $str";
      }
    }

    function makeHuman($name) {
      return new Human($name);
    }

    $john = makeHuman("John Doe");
    echo $john->walk("Pasar!");
  ?>
</body>
</html>