<?php

namespace DesignPatterns\Behavioral\Command\SignIn\QueueCommand;

use DesignPatterns\Behavioral\Command\SignIn\Authentication;
use DesignPatterns\Behavioral\Command\SignIn\SessionInterface;

final class GetInvoice implements Command
{
    public function __construct(
        private readonly SessionInterface $session)
    {
    }

    public function execute(): void
    {
        echo 'Executing GetInvoice' . PHP_EOL;
        file_put_contents('invoice.json', $this->generate());
    }

    private function generate(): string {
        return json_encode([
           'type'=> 'invoice',
           'to' => $this->session->getUser()->getUsername(),
           'price'=> 1229.99,
           'company' => 'StarkIndustries'
        ]);
    }
}