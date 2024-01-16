<?php

namespace App\Tests;

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    protected Calculator $calculator;

    public function setUp():void
    {
        $this->calculator = new Calculator(1);
    }

    public function testAdd()
    {
        $this->assertEquals(4, $this->calculator->add(1,3));
    }

    public function testDivisor() {
        $this->assertEquals(2, $this->calculator->division(4,2));
    }

    public function testExceptionDivisor()
    {
        $this->expectExceptionMessage('Impossible de diviser par zéro');
        $this->calculator->division(4,0);
    }

}
