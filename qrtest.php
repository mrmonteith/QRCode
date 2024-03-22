<?php

use chillerlan\QRCode\{QRCode, QROptions};
require_once 'vendor/autoload.php';

// outputs image directly into browser, as PNG stream
//QRcode::png('PHP QR Code :)'); 

$data   = '13534223';
$qrcode = (new QRCode)->render($data);

// default output is a base64 encoded data URI
printf('<img src="%s" alt="QR Code" width="200px" height="200px" />', $qrcode);

