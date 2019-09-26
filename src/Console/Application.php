<?php

namespace Omexon\Test\Console;

use Omexon\Test\Console\Commands\TestCommand;
use Symfony\Component\Console\Application as SymfonyApplication;
use Symfony\Component\Console\Command\Command;

class Application extends SymfonyApplication
{
    /**
     * Get default commands.
     *
     * @return Command[]
     */
    protected function getDefaultCommands()
    {
        $commands = parent::getDefaultCommands();

        $commands[] = new TestCommand();

        return $commands;
    }
}