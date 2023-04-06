<?php

namespace App\Tests;

use App\Entity\Todo;
use PHPUnit\Framework\TestCase;

class TodoTest extends TestCase
{
    public function testName()
    {
        $todo = new Todo();
        $this->assertNull($todo->getName());

        $name = 'test name';
        $todo->setName($name);
        $this->assertEquals($name, $todo->getName());
    }

    public function testDescription()
    {
        $todo = new Todo();
        $this->assertNull($todo->getDescription());

        $description = 'test description';
        $todo->setDescription($description);
        $this->assertEquals($description, $todo->getDescription());
    }
}
