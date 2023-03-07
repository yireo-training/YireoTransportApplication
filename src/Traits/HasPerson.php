<?php declare(strict_types=1);

namespace Yireo\Traits;

use Yireo\Transport\Person;

trait HasPerson {
    protected $persons = array();

    public function addPerson(Person $person) {
        $this->persons[] = $person;
    }

    /**
     * @return Person[]
     */
    public function getPersons(): array
    {
        return $this->persons;
    }
}