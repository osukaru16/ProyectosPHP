<?php

include 'phpqrcode/qrlib.php';

$file = 'qrcode.png';
$size = 3;
/*
$data = "BEGIN:VCARD\n"
. "VERSION:2.1\n"
. "N:Robinson;Jose\n"
. "FN:Jose Robinson\n"
. "TITLE:Web Developer\n"
. "TEL;WORK;VOICE:(809) 333-4444\n"
. "EMAIL:jr@joserobinson.com\n"
. "END:VCARD";*/
$level = QR_ECLEVEL_H;


$data = $_POST["nombre"];
$data .= $_POST["apellidos"];




QRcode::png($data, $file, $level, $size);



echo "<img alt='QR_CODE' src='".$file."'  />";

















?>