<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Facade\CsvToXml;

use League\Csv\Reader;
use League\Csv\Statement;
use League\Csv\XMLConverter;

final class Controller
{
    public function convert(): void
    {
       $conv = new Converter(
           new XmlConverterFacade(),
           Reader::createFromPath(dirname(__FILE__) . '/facade.csv', 'r')
       );

       echo($conv->convert());
    }
}