<?php declare(strict_types=1);

namespace Yireo\Transport;

use PHPUnit\Framework\TestCase;
use Yireo\Transport\Person\Cyclist;
use Yireo\Transport\Person\Driver;
use Yireo\Transport\PersonFactory;

class PersonFactoryTest extends TestCase
{
    public function testCreateDriver()
    {
        $personFactory = new PersonFactory();
        $this->assertInstanceOf(Driver::class, $personFactory->createDriver());
    }

    public function testCreateCyclist()
    {
        $personFactory = new PersonFactory();
        $this->assertInstanceOf(Cyclist::class, $personFactory->createCyclist());
    }
}
