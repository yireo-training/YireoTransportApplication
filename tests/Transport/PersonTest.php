<?php declare(strict_types=1);

namespace Yireo\Transport;

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    public function testPersonInstantiation()
    {
        $person = new Person;
        $this->assertInstanceOf(Person::class, $person);
    }
}
