<?php
class MyDestructableClass {
   function __construct() {
       print "En el constructor\n";
       $this->name = "MyDestructableClass";
   }

   function __destruct() {
       print "Destruyendo " . $this->name . "\n";
   }
}

$obj = new MyDestructableClass();
?>