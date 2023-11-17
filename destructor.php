<?php
  class  Man {
    public $name;
    public $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    function __destruct() {
        echo "The name is {$this->name} and age is {$this->age}.";
    }
  }

  $kabir = new Man("Kabir singh", 26);
?>