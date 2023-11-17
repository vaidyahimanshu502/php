<?php 
  abstract class Person {
    abstract protected function prefixName($name);
  }
  class Child extends Person {
    public function prefixName($name, $seperator = '.', $greet = 'Dear') {
        $prefix = "Mr";
        if($name == "Himanshu Vaidya") {
            return "{$greet} {$prefix}{$seperator} {$name}";
        }
    }
  }
  $class = new Child();
  echo $class->prefixName("Himanshu Vaidya");
?>