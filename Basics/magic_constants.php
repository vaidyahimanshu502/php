<!-- They are similar to other predefined constants but as they
     change their values with the context, they are called magic constants. -->

  <!-- Some of them are
        __LINE__
        __FILE__
        __DIR__
        __FUNCTION__
        __CLASS__
        __TRAIT__
        __METHOD__
        __NAMESPACE__
        ClassName::class -->

<?php
  // 1. __LINE__ : It returns the current line number of the file, where this constant is used.
  echo "<h2> Showing current line of code</h2>";
  echo "We are in  line : " .  __LINE__  .'<br>';  // 18

  // 2. __FILE__ :  returns the full path of the executed file, where the file is stored. If it is used inside the include, the name of the included file is returned.
  echo "The file name is : " . __FILE__ . '<br>';

  // 3. __DIR__ : It returns the full directory path of the executed file.
  echo "The full dir is : " . __DIR__ . '<br>';

  // 4. __FUNCTION__ : This magic constant returns the function name, where this constant is used. It will return blank if it is used outside of any function.
  function test() {
    echo "The function name is : " . __FUNCTION__ . "<br>";
  }
  test();

  // 5. __CLASS__ : It returns the class name, where this magic constant is used. __CLASS__ constant also works in traits.
  class myCLASS {
    public function __construct() {
      ;
    }
    function getClassName() {
      echo "The class name is : " . __CLASS__ . "<br>";
    }
  }
  $name = new myCLASS;
  $name->getClassName();

  // 6. __TRAIT__ : This magic constant returns the trait name, where it is used.

  trait created {
    function printTraitName() {
      echo "The name of trait is : " . __TRAIT__ . '<br>';
    }
  }
  class newClass {
    use created;
  }
  $trait_name = new newClass;
  $trait_name->printTraitName();

  // 7. __METHOD__ : It returns the name of the class method where this magic constant is included. The method name is returned the same as it was declared.
  class method {    
    public function __construct() {    
        //print method::__construct    
            echo __METHOD__ . "<br><br>";   
        }    
    public function meth_fun(){    
        //print method::meth_fun    
            echo __METHOD__;   
    }    
  }    
  $a = new method;    
  $a->meth_fun();  
?>