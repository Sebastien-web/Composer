<?php
//require_once "../src/Wcs/Hello.php";
require_once '../vendor/autoload.php'; // Autoload files using Composer autoload

/*use HelloWorld\SayHello;
use App\Wcs\Hello;

$helloWorld = new SayHello();
echo $helloWorld->world();

$hello = new Hello();
echo $hello->talk(); */

new App\Wcs\Hello();

$var = new HelloWorld\SayHello();
echo $var->world();