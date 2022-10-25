<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Facade\CsvToXml;

use League\Csv\Reader;
use League\Csv\Statement;
use League\Csv\XMLConverter;

final class ConverterFacade
{
    public function __construct(private readonly Reader $abstractCsvReader)
    {
    }

    public function convert(): string
    {
        $this->abstractCsvReader->setDelimiter(';');
        $this->abstractCsvReader->setHeaderOffset(0);

        $converter = (new XMLConverter())
            ->rootElement('csv')
            ->recordElement('record', 'offset')
            ->fieldElement('field', 'name')
        ;

        $stmt = Statement::create()
            ->limit(2)
        ;

        $records = $stmt->process($this->abstractCsvReader);
        $dom = $converter->convert($records);
        $dom->formatOutput = true;
        $dom->encoding = 'iso-8859-15';

        return $dom->saveXML();
    }
}