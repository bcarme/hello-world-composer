<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
use App\Wcs\Hello;
use HelloWorld\SayHello;

$man = new Hello;
echo $man-> talk();

$woman = new SayHello();
echo $woman->world();
