<?php declare(strict_types=1);

namespace Yireo\Transport;

use Yireo\Transport\Api\VehicleFactoryInterface;
use Yireo\Transport\Vehicle\Bicycle;
use Yireo\Transport\Vehicle\Car;

class VehicleFactory implements VehicleFactoryInterface
{
    public function createCar(): Car
    {
        return new Car;
    }

    public function createBicycle(): Bicycle
    {
        return new Bicycle;
    }
}
