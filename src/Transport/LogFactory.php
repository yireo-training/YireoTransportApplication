<?php declare(strict_types=1);

namespace Yireo\Transport;

use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use Psr\Log\LoggerInterface;

class LogFactory
{
    public function createLogger(): LoggerInterface
    {
        static $logger;
        if ($logger instanceof LoggerInterface) {
            return $logger;
        }

        $logger = new Logger('name');
        $logger->pushHandler(new StreamHandler(dirname(dirname(dirname(__DIR__))).'/example.log', Level::Warning));
        return $logger;
    }
}
