<?php
class OtherClass extends MyClass
{
    public static $my_static = 'variable estática';

    public static function doubleColon() {
        echo parent::CONST_VALUE . "\n";
        echo self::$my_static . "\n";
    }
}

$classname = 'OtherClass';
//$classname::doubleColon(); // A partir de PHP 5.3.0

OtherClass::doubleColon();
?>