<?php declare(strict_types=1);

namespace YireoTests\Transport;

use PHPUnit\Framework\TestCase;
use TypeError;
use Yireo\Transport\Person;
use Yireo\Transport\Vehicle;

class VehicleTest extends TestCase
{
    public function testIfThisWorks()
    {
        $vehicle = new Vehicle;
        $this->assertEquals(0, count($vehicle->getPersons()));

        $vehicle->addPerson(new Person());
        $this->assertEquals(1, count($vehicle->getPersons()));

        $this->expectException(TypeError::class);
        $vehicle->addPerson('Harry');
    }
}
