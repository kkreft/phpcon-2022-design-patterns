<?php

require_once (__DIR__ . '/../vendor/autoload.php');

/**
 * Composite
 *

require_once (__DIR__ . '/Structural/Composite/Controller.php');

use DesignPatterns\Structural\Composite\Controller;

$controller = new Controller();
var_dump($controller->totalSize());
 /*
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
 */

//use DesignPatterns\Behavioral\NullObject\WhoIsClara\Controller;
//
//$controller = new Controller();
//$controller->getCharacter(100);
//$controller->getClara();
//$controller->getClara();

/**/

/**
 * Command - SignIn
 *

use DesignPatterns\Behavioral\Command\SignIn\Controller;

$controller = new Controller();
//$controller->signIn('Bob', '123456');
//$controller->signIn('Bob2', '123456');
$controller->loginAndLogut('Bob', '123456');
/**/

/**
 * Strategy - Sorting


use DesignPatterns\Behavioral\Strategy\Sorting\Controller;

$controller = new Controller();
$controller->sort(sortType: 'created');
/**/

/**
 * Strategy - Character Provider
 *

use DesignPatterns\Behavioral\Strategy\CharacterProvider\Character\PickleRick;
use DesignPatterns\Behavioral\Strategy\CharacterProvider\Character\Rick;
use DesignPatterns\Behavioral\Strategy\CharacterProvider\Controller;

$controller = new Controller();
$controller->getCharacter(new Rick());
$controller->getCharacter(new PickleRick());

/**/


/**
 * Observer - Orders
 */

use DesignPatterns\Behavioral\Observer\Orders\Controller;

$controller = new Controller();
$controller->saveOrder([
    'type' => 'Wzorce Projektowe w PHP',
    'buyer' => 'Max',
    'price' => '500.00',
    'paid' => '0',
    'createDate' => date('Y-m-d'),
]);

/**

$controller = new \DesignPatterns\Structural\Decorator\Notification\Controller();
$controller->send('message');
 /**/
/**
$controller = new \DesignPatterns\Structural\Decorator\SimpleCache\Controller();
var_dump($controller->getProductInfo(2));
/**/
