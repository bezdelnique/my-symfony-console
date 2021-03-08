<?php


namespace App\Job;


use App\Component\Logger\ConsoleLogger;
use Symfony\Component\Console\Output\OutputInterface;

class JohnWorker
{
    /**
     * @var ConsoleLogger
     */
    private ConsoleLogger $logger;

    public function __construct(ConsoleLogger $logger)
    {
        $this->logger = $logger;
    }

    public function run()
    {
        $this->logger->info('info: ' . __CLASS__);
        $this->logger->debug('debug: ' . __CLASS__);
        $this->logger->error('error: ' . __CLASS__);
        $this->logger->notice('notice: ' . __CLASS__);
    }
}
