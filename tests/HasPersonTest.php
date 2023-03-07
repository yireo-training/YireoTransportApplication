<?php declare(strict_types=1);

namespace YireoTests\Traits;

use Yireo\Traits\HasPerson;
use PHPUnit\Framework\TestCase;
use Yireo\Transport\Person;

class HasPersonTest extends TestCase
{
    use HasPerson;

    public function testHasPerson()
    {
        $this->addPerson(new Person());
        $this->assertEquals(1, count($this->getPersons()));
    }
}
