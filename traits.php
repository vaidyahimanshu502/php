<?php
  trait Message1 {
    public function msg1() {
        echo "Hey Himanshu Welcome.";
    }
  }
  trait Message2 {
    public function msg2() {
        echo "you are awesome.";
    }
  }

  class Welcome {
    use Message1;
  }

  class Welcome2 {
    use Message1, Message2;
  }

  $x = new Welcome();
  $x->msg1();
  echo "<br>";

  $y = new Welcome2();
  $y->msg1();
  echo "<br>";
  $y->msg2();
?>