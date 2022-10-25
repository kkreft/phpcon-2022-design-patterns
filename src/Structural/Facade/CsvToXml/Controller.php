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
        $csv = Reader::createFromPath(dirname(__FILE__) . '/facade.csv', 'r');
        $csv->setDelimiter(';');
        $csv->setHeaderOffset(0);

        $converter = (new XMLConverter())
            ->rootElement('csv')
            ->recordElement('record', 'offset')
            ->fieldElement('field', 'name')
        ;

        $stmt = Statement::create()
            ->limit(2)
        ;

        $records = $stmt->process($csv);
        $dom = $converter->convert($records);
        $dom->formatOutput = true;
        $dom->encoding = 'iso-8859-15';

        echo $dom->saveXML();
    }
}