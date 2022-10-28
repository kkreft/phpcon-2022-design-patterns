<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Facade\CsvToXml;

interface CsvXmlConverterFacade
{
    public function convert(iterable $records): \DOMDocument;

    public function rootElement(string $node_name): self;

    public function recordElement(string $node_name, string $record_offset_attribute_name = ''): self;

    public function fieldElement(string $field, string $record_offset_attribute_name= ''): self;

}