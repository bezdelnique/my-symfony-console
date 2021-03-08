<?php

namespace App\Command;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class HelloCommand extends Command
{


    /**
     * In this method setup command, description, and its parameters
     */
    protected function configure()
    {
        $this->setName('hello');
        $this->setDescription('Write your name.');
        $this->addArgument('name', InputArgument::REQUIRED, 'Your name.');
    }

    /**
     * Here all logic happens
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('name');
        $output->writeln(sprintf(
            'Hello %s!', $name
        ));
        return self::SUCCESS;
    }
}
