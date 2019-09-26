<?php

namespace Omexon\Test\Console\Commands;

use Omexon\Test\Console\BaseCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends BaseCommand
{
    /**
     * Configure.
     */
    protected function configure()
    {
        $this->setName('test');
        $this->setDescription('Test command');
    }

    /**
     * Execute.
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void|null
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        print($this->getDescription() . "\n");
    }
}