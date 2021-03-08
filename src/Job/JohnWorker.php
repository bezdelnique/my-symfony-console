<?php


namespace App\Job;


use Psr\Log\LoggerInterface;

class JohnWorker
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct(LoggerInterface $logger)
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
