<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      class Laptop {
        private $id;
        private $width;
        private $height;
        private $marca;

        public function __construct($id, $width, $height, $marca){
          $this -> id = $id;
          $this -> width = $width;
          $this -> height = $height;
          $this -> marca = $marca;
        }

        public function calcInches(){
          return sqrt(($this-> width * $this-> height) / 2.53);
        }

        public function printMe(){
          echo "ID Prodotto: " . $this -> id . "<br>"
                . "Larghezza : " . $this -> width . "<br>"
                . "Altezza : " . $this -> height . "<br>"
                . "Marca : " . $this -> marca . "<br><br>"
                . $this -> calcInches();
        }

      }

      // Prodotto n.1
      $pc1 = new Laptop(3, 48, 39, "HP");
      $pc1 -> printMe();


      // Prodotto n.2
      $pc2 = new Laptop(2, 45, 30, "LENOVO");
      $pc2 -> printMe();


     ?>
  </body>
</html>
