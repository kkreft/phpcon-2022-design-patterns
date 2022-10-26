<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Command\SignIn;

use DesignPatterns\Behavioral\Command\SignIn\QueueCommand\GetInvoice;
use DesignPatterns\Behavioral\Command\SignIn\QueueCommand\Invoker;
use DesignPatterns\Behavioral\Command\SignIn\QueueCommand\Queue;
use DesignPatterns\Behavioral\Command\SignIn\QueueCommand\SignIn;
use DesignPatterns\Behavioral\Command\SignIn\QueueCommand\SignOut;
use JetBrains\PhpStorm\NoReturn;

final class QueueController
{
    private Authenticator $authenticator;
    private Queue $queue;

    public function __construct()
    {
        $this->authenticator = new Authenticator();
        $this->queue = new Queue();
    }

    public function signIn(string $user, string $password): void
    {
        try {
            $command = new SignIn($user, $password, $this->authenticator);
            (new Invoker())($command);

            var_dump($this->authenticator->getUser());
        } catch (\Exception $exception) {
            print 'invalid credentials'.PHP_EOL;
        }
    }

    #[NoReturn] public function generateInvoice(string $user, string $password): void
    {
        $session = new Session($this->authenticator);

        $this->queue->register(
            new SignIn($user, $password, $this->authenticator),
            new GetInvoice($session),
            new SignOut($session)
        );

        (new Invoker())(...$this->queue->getAll());
        var_dump($this->authenticator->getUser());
    }

}
