<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Facade\CsvToXml;

use League\Csv\XMLConverter as BaseXmlConvrter;

final class XmlConverterFacade extends BaseXmlConvrter implements CsvXmlConverterFacade
{
    public function convert(iterable $records): \DOMDocument
    {
       return parent::convert($records);
    }
    public function rootElement(string $node_name): self
    {
        return parent::rootElement($node_name);
    }

    public function recordElement(string $node_name, string $record_offset_attribute_name = ''): self
    {
        return parent::recordElement($node_name, $record_offset_attribute_name);
    }

    public function fieldElement(string $field, string $record_offset_attribute_name= ''): self
    {
        return parent::fieldElement($field, $record_offset_attribute_name);
    }
}