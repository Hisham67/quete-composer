<?php
/**
 * Created by PhpStorm.
 * User: etienne
 * Date: 28/09/18
 * Time: 09:22
 */


require '../vendor/autoload.php';
require '../vendor/ehime/hello-world/src/HelloWorld/SayHello.php';

$salutation = new App\wcs\Hello();

echo $salutation -> talk();

$greet = new \HelloWorld\SayHello();

echo $greet -> world();


