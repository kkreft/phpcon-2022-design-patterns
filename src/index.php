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
 *

use DesignPatterns\Structural\Adapter\HttpClient\Controller;

$controller = new Controller();
$controller->getRicky();
/**/

/**
 * Bridge
 *

use DesignPatterns\Structural\Bridge\Cli\Controller;

$controller = new Controller();
$controller->red();
$controller->blue();
$controller->sweet();
$controller->you();
/**/

/**
 * NullObject
 *

use DesignPatterns\Behavioral\NullObject\WhoIsClara\Controller;

$controller = new Controller();
//$controller->getRick();
$controller->getMorty();
//$controller->getClara();

/**/

/**
 * Command - SignIn
 *

use DesignPatterns\Behavioral\Command\SignIn\Controller;
use DesignPatterns\Behavioral\Command\SignIn\User;

$controller = new Controller();
$controller->signIn('Bob', '123456');
//$controller->signIn('Bob2', '123456');

$controller->signOut(new User('Bob'));

/**/

/**
 * Command - SignIn
 */

use DesignPatterns\Behavioral\Command\SignIn\QueueController as Controller;
use DesignPatterns\Behavioral\Command\SignIn\User;

$controller = new Controller();
//$controller->signIn('Bob', '123456');
$controller->generateInvoice('Bob', '123456');
//$controller->signIn('Bob2', '123456');
