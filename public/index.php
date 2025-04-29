<?php
require_once('../vendor/autoload.php');

$worker = new \App\Worker('Kyza', '32', [4, 5, 10]);
$visitor = new \App\Visitor();
$developer = new \App\Developer('Biszzar', '31', [4, 5, 10]);

$developer->setPosition('web-dev');
var_dump($developer->getPosition());

$developer->work();