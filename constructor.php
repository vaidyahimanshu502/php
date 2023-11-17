<?php 
   class Car {
     public $name;
     public $model;

     function __construct($name, $model) {
        $this->name = $name;
        $this->model = $model;
     }

     function get_name() {
        return $this->name;
     }

     function get_model() {
        return $this->model;
     }
   }

   $maruti = new Car("Maruti", "2014");

   echo $maruti->get_name();
   echo "<br>";
   echo $maruti->get_model();
?>