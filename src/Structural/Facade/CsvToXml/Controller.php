<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Facade\CsvToXml;

use League\Csv\Reader;

final class Controller
{
    public function convert(): void
    {
        $converter = new ConverterFacade(Reader::createFromPath(dirname(__FILE__) . '/facade.csv', 'r'));
        echo $converter->convert();

    }
}