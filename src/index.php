<?php

require_once (__DIR__ . '/../vendor/autoload.php');

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
 *

use DesignPatterns\Structural\Facade\CsvToXml\Controller;

$controller = new Controller();
$controller->convert();
/**/

/**
 * Adapter
 */

use DesignPatterns\Structural\Adapter\HttpClient\Controller;

$controller = new Controller();
$controller->getRicky();
/**/
