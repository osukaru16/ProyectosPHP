<?php
class A
{
    function foo()
    {
        if (isset($this)) {
            echo '$this está definida (';
            echo get_class($this);
            echo ")<br/>";
        } else {
            echo "\$this no está definida.<br/>";
        }
    }
}

class B
{
    function bar()
    {
        A::foo();
    }
}

$a = new A();
$a->foo();

A::foo();
$b = new B();
$b->bar();

B::bar();
?>