<?php declare(strict_types=1);

namespace Yireo\Transport\Vehicle;

use Yireo\Transport\Person;
use Yireo\Transport\Person\Cyclist;
use Yireo\Transport\TransportInterface;
use Yireo\Transport\Vehicle;

class Bicycle extends Vehicle implements TransportInterface
{
    public function addPerson(Person $person)
    {
        $this->persons[] = $person;
    }

    public function getWheels()
    {
        return 2;
    }
}