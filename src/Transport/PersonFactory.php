<?php declare(strict_types=1);

namespace Yireo\Transport;

use Yireo\Transport\Api\VehicleFactoryInterface;
use Yireo\Transport\Person\Cyclist;
use Yireo\Transport\Person\Driver;
use Yireo\Transport\Vehicle\Car;

class PersonFactory
{
    public function createDriver(): Driver
    {
        return new Driver;
    }

    public function createCyclist(): Cyclist
    {
        return new Cyclist;
    }
}
