<?php declare(strict_types=1);

namespace Yireo\Transport;

use PHPUnit\Framework\TestCase;
use Yireo\Transport\Person\Cyclist;
use Yireo\Transport\Person\Driver;
use Yireo\Transport\PersonFactory;
use Yireo\Transport\Vehicle\Bicycle;
use Yireo\Transport\Vehicle\Car;

class VehicleFactoryTest extends TestCase
{
    public function testCreateCar()
    {
        $vehicleFactory = new VehicleFactory();
        $this->assertInstanceOf(Car::class, $vehicleFactory->createCar());
    }

    public function testCreateBicycle()
    {
        $vehicleFactory = new VehicleFactory();
        $this->assertInstanceOf(Bicycle::class, $vehicleFactory->createBicycle());
    }
}
