<?php declare(strict_types=1);

namespace Yireo\Transport;

use Yireo\Traits\HasPerson as Personable;

class Vehicle
{
    use Personable;

    protected $wheels = 0;

    public function getWheels()
    {
        return $this->wheels;
    }
}