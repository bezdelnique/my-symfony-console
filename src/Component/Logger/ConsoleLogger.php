<?php


namespace App\Component\Logger;


class ConsoleLogger extends \Symfony\Component\Console\Logger\ConsoleLogger
{
    public const DEBUG = 'debug';
    public const NOTICE = 'notice';

    public function info($message, array $context = [])
    {
        $this->log(self::INFO, $message, $context);
    }

    public function debug($message, array $context = [])
    {
        $this->log(self::DEBUG, $message, $context);
    }

    public function error($message, array $context = [])
    {
        $this->log(self::ERROR, $message, $context);
    }

    public function notice($message, array $context = [])
    {
        $this->log(self::NOTICE, $message, $context);
    }
}
