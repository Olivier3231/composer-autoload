<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Wcs\Hello;

$talk = new Hello();

echo $talk->talk();

use HelloWorld\SayHello;

echo SayHello::world();