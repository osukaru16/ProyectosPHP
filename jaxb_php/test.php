<?php

	// turn the schema into a class file
	require_once('jaxb.class.php');
	$jaxb = new JAXB();
	$jaxb->parseSchema('sample.xsd');
	// turn the xml document into an object
	$object = $jaxb->unmarshal('sample.xml');

	//print_r($object);

	// helper function
	function hoth($str){
		echo "$str\r\n";
	}

?>