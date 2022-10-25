<?php
require_once (__DIR__ . '/Structural/Composite/Controller.php');
require_once ('Structural/Composite/Directory.php');
require_once ('Structural/Composite/LocalFileSystemInterface.php');
require_once ('Structural/Composite/File.php');

use DesignPatterns\Structural\Composite\Controller;


$controller = new Controller();
var_dump($controller->totalSize());