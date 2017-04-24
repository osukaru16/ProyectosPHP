<?php
// classa.inc:
  
  class A {
      public $one = 1;
    
      public function show_one() {
          echo $this->one;
      }
  }
  
// page1.php:

  //include("classa.inc");
  
  $a = new A;
  $s = serialize($a);
  // almacenamos $s en algún lugar en el que page2.php puede encontrarlo.
  file_put_contents('store', $s);

// page2.php:
  
  // se necesita para que unserialize funcione correctamente.
 // include("classa.inc");

  $s = file_get_contents('store');
  $a = unserialize($s);

  // now use the function show_one() of the $a object.  
  $a->show_one();
?>