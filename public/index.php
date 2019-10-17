<?php
require_once "../src/Wcs/Hello.php";
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use App\Wcs\Hello;
use Helloworld\SayHello;

echo SayHello::world();

$hello = new Hello();
echo $hello->talk();
