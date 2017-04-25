<?php
//Esta forma de llamar de forma estatica a metodos no estaticos queda bosoleta en php 7.0


class foo {
    function bar() {
        echo '¡No soy estático!';
    }
}

foo::bar();
?>