<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Facade\CsvToXml;

use League\Csv\Reader;
use League\Csv\Statement;


final class Converter
{
    public function __construct(
        private readonly XmlConverterFacade $xmlConverter,
        private Reader $reader
    )
    {
    }

    public function convert(): string
    {
       // $this->reader = Reader::createFromPath(dirname(__FILE__) . '/facade.csv', 'r');
        $this->reader->setDelimiter(';');
        $this->reader->setHeaderOffset(0);

        $converter = $this->xmlConverter
            ->rootElement('csv')
            ->recordElement('record', 'offset')
            ->fieldElement('field', 'name')
        ;

        $stmt = Statement::create()
            ->limit(2)
        ;

        $records = $stmt->process($this->reader);
        $dom = $converter->convert($records);
        $dom->formatOutput = true;
        $dom->encoding = 'iso-8859-15';

        return $dom->saveXML();
    }
}