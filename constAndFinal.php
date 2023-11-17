<?php
   final class Person {
     public $name;
     public $age;
     public $occupation;

     public function __construct($name, $age, $occupation) {
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
     }
   }

  # public class Man extends Person {} // this will throw an error because final class can not be inherritted

 class PersonName {
    public $name;
    public $age;
    public $occupation;


    const MESSAGE = "Hello , Welcome the wold of technology.";

    public function __construct($name, $age, $occupation) {
       $this->name = $name;
       $this->age = $age;
       $this->occupation = $occupation;
    }

    public function greet() {
        echo self::MESSAGE;
    }
  }

  $greet = new PersonName("Himanshu", 27, "PHP Developer");

  $greet->greet();
?>