<?php
/**
 * Composite
 *

require_once (__DIR__ . '/Structural/Composite/Controller.php');

use DesignPatterns\Structural\Composite\Controller;

$controller = new Controller();
var_dump($controller->totalSize());
 *
 */

/**
 * Facade
 */

require_once (__DIR__ . '/../vendor/autoload.php');

use DesignPatterns\Structural\Facade\CsvToXml\Controller;

$controller = new Controller();
$controller->convert();

