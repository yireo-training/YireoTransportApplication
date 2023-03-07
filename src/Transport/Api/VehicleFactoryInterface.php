<?php declare(strict_types=1);

namespace Yireo\Transport\Api;

use Yireo\Transport\Vehicle\Car;

interface VehicleFactoryInterface
{
    public function createCar(): Car;
}