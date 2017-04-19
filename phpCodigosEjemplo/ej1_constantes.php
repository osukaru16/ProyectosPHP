<?php
class MyClass {
    const CONST_VALUE = 'Un valor constante';

    public function getConstante(){
    	return $this::CONST_VALUE;
    } 
}

$classname = new MyClass();
echo $classname->getConstante(); 

//echo MyClass::CONST_VALUE;
?>