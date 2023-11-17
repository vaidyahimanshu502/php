<?php 
   class Fruit {
    public $name;
    public $color;

     public function __construct($name, $color) {
        $this->name = $name;
        $this->color =$color;
     }
    
     public function intro() {
        echo "The name is : {$this->name} and the color is {$this->color}.";
     }
   }

   class Straberry extends Fruit {
    public $weight;

    public function __construct($name, $color, $weight) {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    public function intro() {
        echo "The name is : {$this->name} , the color is {$this->color} and the weight is {$this->weight} grams.";
    }
   }

   $straberry = new Straberry("Straberry", "Red", 150);

   $straberry->intro();
 ?>