<?php declare(strict_types=1);

namespace YireoTests\Transport;

use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;
use Yireo\Transport\LogFactory;

class LogFactoryTest extends TestCase
{
    public function testCreateLogger()
    {
        $logFactory = new LogFactory();
        $logger = $logFactory->createLogger();
        $this->assertInstanceOf(LoggerInterface::class, $logger);
    }
}