<?php
require_once (__DIR__ . '/Structural/Composite/Controller.php');

use DesignPatterns\Structural\Composite\Controller;


$controller = new Controller();
var_dump($controller->totalSize());