<?php

namespace Tests\Unit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    private $controller;

    protected function setUp(): void
    {
        parent::setUp();
        $this->controller = new Controller();
    }

    public function testSumIsCorrect()
    {
        $result = $this->controller->sum(2, 2);
        $this->assertEquals(4, $result);
    }

    public function testStringIdentity()
    {
        $string1 = "Hola";
        $string2 = $this->controller->getHello();
        $this->assertSame($string1, $string2);
    }

    public function testArrayContainsElement()
    {
        $fruits = ['apple', 'orange', 'banana'];
        $this->assertTrue($this->controller->arrayContainsElement('banana', $fruits));
    }

    public function testExceptionIsThrown()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->controller->throwException();
    }

    public function testArrayCount()
    {
        $numbers = [1, 2, 3, 4, 5];
        $this->assertCount(5, $this->controller->getNumbers());
    }
}
