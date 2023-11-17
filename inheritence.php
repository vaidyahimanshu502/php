<?php 
   class Main {
     public $name;
     public $age;
     function __construct($n, $a) {
        $this->name = $n;
        $this->age = $a;
     }

     function sayHello() {
        echo "Hello, {$this->name}.";
     }
   }

   class Child extends Main {
     function printAge() {
        echo "{$this->name} Your age is {$this->age}.";
     }
   }

   $man = new Child("Mohit", 26);

   $man->sayHello();
   $man->printAge();
?>