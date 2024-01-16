<?php

namespace App\Tests\Model;

use App\Model\Add;
use App\Model\Divisor;
use App\Model\Number;
use App\Model\NumberString;
use PHPUnit\Framework\TestCase;

class CalculModelTest extends TestCase
{

    protected Add $add;
    protected Divisor $divisor;

    public function setUp():void
    {
        $this->add = new Add();
        $this->divisor = new Divisor();

    }

    public function testAdd()
    {
        $a = new Number(2);
        $b = new Number(2);

        $this->assertEquals(new NumberString(4), $this->add->exec($a,$b));
    }

    public function testDivisor() {
        $a = new Number(4);
        $b = new Number(2);
        $this->assertEquals(new NumberString(2), $this->divisor->exec($a, $b));
    }

}
