<?php

declare(strict_types=1);

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public $calc;

    protected function setUp(): void
    {
        $this->calc = new Calculator();
    }

    function testMethods()
    {

        $this->assertEquals(
            10,
            $this->calc->sum(2, 3, 5),
            'wrong sum'
        );

        $this->assertEquals(
            27,
            $this->calc->pow(3, 3),
            'wrong pow'
        );

        $this->assertEquals(
            10,
            $this->calc->minus(20, 10),
            'wrong minus'
        );

        $this->assertEquals(
            9,
            $this->calc->mult(3, 3),
            'wrong mult'
        );

        $this->assertEquals(
            9,
            $this->calc->div(27, 3),
            'wrong div'
        );

        $this->assertEquals(
            1,
            $this->calc->per(27, 2),
            'wrong div'
        );

        $this->assertIsFloat(
            $this->calc->div(27, 3),
            'wrong div'
        );

        $this->assertTrue(
            $this->calc->equal(3, 3),
            'wrong equal'
        );

        $this->assertTrue(
            $this->calc->more(5, 3),
            'wrong more'
        );

        $this->assertTrue(
            $this->calc->less(1, 3),
            'wrong less'
        );

        $this->assertEquals(
            [1, 5, 8],
            $this->calc->sort([5, 8, 1]),
            'wrong sort'
        );

        $this->assertEquals(
            [1, 8, 5],
            $this->calc->reverse([5, 8, 1]),
            'wrong reverse'
        );

    }

    protected function tearDown(): void
    {
    }
}
