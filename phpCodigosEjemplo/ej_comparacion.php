<?php
function bool2str($bool)
{
    if ($bool === false) {
        return 'FALSO';
    } else {
        return 'VERDADERO';
    }
}

function compararObjetos(&$o1, &$o2)
{
    echo 'o1 == o2 : ' . bool2str($o1 == $o2) . "<br/>";
    echo 'o1 != o2 : ' . bool2str($o1 != $o2) . "<br/>";
    echo 'o1 === o2 : ' . bool2str($o1 === $o2) . "<br/>";
    echo 'o1 !== o2 : ' . bool2str($o1 !== $o2) . "<br/>";
}

class Bandera
{
    public $bandera;

    function Bandera($bandera = true) {
        $this->bandera = $bandera;
    }
}

class OtraBandera
{
    public $bandera;

    function OtraBandera($bandera = true) {
        $this->bandera = $bandera;
    }
}

$o = new Bandera();
$p = new Bandera();
$q = $o;
$r = new OtraBandera();

echo "Dos instancias de la misma clase <br/>";
compararObjetos($o, $p);

echo "<br/> Dos referencias a la misma instancia <br/>";
compararObjetos($o, $q);

echo "<br/> Instancias de dos clases diferentes <br/>";
compararObjetos($o, $r);
?>