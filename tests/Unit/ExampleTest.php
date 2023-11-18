<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
 
    // Verifica que 2 + 2 sea igual a 4
    public function testSumIsCorrect()
    {
        $result = 2 + 2;
        $this->assertEquals(4, $result);
    }
    // Verifica que el valor y el tipo de una variable sean exactamente iguales
    public function testStringIdentity()
    {
        $string1 = "Hola";
        $string2 = "Hola";
        $this->assertSame($string1, $string2);
    }
    // Verifica que un array contiene un elemento específico
    public function testArrayContainsElement()
    {
        $fruits = ['apple', 'orange', 'banana'];
        $this->assertContains('banana', $fruits);
    }
    // Verifica que se lance una excepción específica
    public function testExceptionIsThrown()
    {
        $this->expectException(\InvalidArgumentException::class);
        throw new \InvalidArgumentException("This is an invalid argument exception.");
    }
    // Verifica que un array tiene un número específico de elementos
    public function testArrayCount()
    {
        $numbers = [1, 2, 3, 4, 5];
        $this->assertCount(5, $numbers);
    }

}
