<?php




function __call( $name, $params ){
        if( $name == "show" && count($params) == 2 ){
        	$this->showEx($params[0],$params[1]);
        }
    }







?>