<?php declare(strict_types=1);

namespace Yireo\Transport;

interface TransportInterface
{
    public function addPerson(Person $person);
    //public function getAmountOfPersons();
}