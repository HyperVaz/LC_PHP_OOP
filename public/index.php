<?php
require_once('../vendor/autoload.php');

$developer = new \App\Developer('Biszzar', '31', [4, 5, 10]);

$designer = new \App\Designer('Baltazar', '22', [4, 5, 10]);

var_dump(\App\Salary::count($developer->getHours()));
\App\Salary::$totalHours = \App\Salary::$totalHours + 100;
var_dump(\App\Salary::$totalHours);

var_dump(property_exists($developer, 'work'));
