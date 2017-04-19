<?php
$string1 = "hooola";
$string2 = "hooooola";
$string2 = "hoola";
$string4 = "houiela";
$string5 = "hla";
echo preg_match("/ho{3}la/", $string1)."<br/>"; // Devuelve 1
// Si se indica {n,} quiere decir que al menos n elementos
echo preg_match("/ho{3,}la/", $string2)."<br/>"; // Devuelve 1
// Si se indica {n, m} quiere decir un número entre n y m
echo preg_match("/ho{2,3}la/", $string3)."<br/>"; // Devuelve 1
echo preg_match("/h[aeiou]{4}la/", $string4)."<br/>"; // Devuelve 1
echo preg_match("/ho{0}la/", $string5)."<br/>"; // Devuelve 1

?>