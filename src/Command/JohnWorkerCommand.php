<?php

namespace App\Command;


use App\Component\Logger\ConsoleLogger;
use App\Job\JohnWorker;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class JohnWorkerCommand extends Command
{
//    /**
//     * @var JohnWorker
//     */
//    private JohnWorker $johnWorker;
//
//    public function __construct(JohnWorker $johnWorker, string $name = null)
//    {
//        $this->johnWorker = $johnWorker;
//        parent::__construct($name);
//    }

    protected function configure()
    {
        $this->setName('john-worker');
        // $this->setDescription('Write your name.');
        // $this->addArgument('name', InputArgument::REQUIRED, 'Your name.');
    }

    /**
     * Here all logic happens
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Starting\n");

        $logger = new ConsoleLogger($output);

        // $this->johnWorker->run();
        $johnWorker = new JohnWorker($logger);
        $johnWorker->run();
        return self::SUCCESS;
    }
}
