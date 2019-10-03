<?php

declare(strict_types=1);

use App\Calculator;
use PHPUnit\Framework\TestCase;

class VladTest extends TestCase
{
    public $calc;

    protected function setUp(): void
    {
        $this->calc = new Calculator();
    }

    function testMethods()
    {

        $this->assertEquals(
            [1, 3, 3],
            $this->calc->plus1(1, 2, 3),
            'wrong plus1'
        );

        $this->assertEquals(
            [1, 6, 3],
            $this->calc->plus1(1, 5, 3),
            'wrong plus1'
        );

        $this->assertEquals(
            [0, 1, 0],
            $this->calc->plus1(0, 0, 0),
            'wrong plus1'
        );

        $this->assertEquals(
            [1, 2, 1],
            $this->calc->plus1(1, 1, 1),
            'wrong plus1'
        );

        $this->assertEquals(
            [3, 4, 3],
            $this->calc->plus1(3, 3, 3),
            'wrong plus1'
        );

    }

    protected function tearDown(): void
    {
    }
}
