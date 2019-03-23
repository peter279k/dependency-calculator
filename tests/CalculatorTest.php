<?php

namespace Lee\Calculator\Tests;

use Lee\Calculator\Calculator;
use Lee\Calculator\modules\GmpCalculator;
use Lee\Calculator\modules\BcMathCalculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    protected $gmpCalculator;
    protected $bcMathCalculator;

    protected function setUp(): void
    {
        $this->gmpCalculator = new Calculator(new GmpCalculator());
        $this->bcMathCalculator = new Calculator(new BcMathCalculator());
    }

    public function numberProviderForAdd(): array
    {
        return [
            ['123456789', '123456789000000', '123456912456789'],
            ['123456789', '-123456789000000', '-123456665543211'],
            ['-123456789', '-123456789000000', '-123456912456789'],
            ['-123456789', '123456789000000', '123456665543211'],
        ];
    }

    /**
     * @dataProvider numberProviderForAdd
     */
    public function testAdd($num1, $num2, $expected): void
    {
        $this->assertEquals($expected, $this->gmpCalculator->add($num1, $num2));
        $this->assertEquals($expected, $this->bcMathCalculator->add($num1, $num2));
    }

    public function numberProviderForMinus(): array
    {
        return [
            ['123456789', '123456789000000', '-123456665543211'],
            ['123456789', '-123456789000000', '123456912456789'],
            ['-123456789', '-123456789000000', '123456665543211'],
            ['-123456789', '123456789000000', '-123456912456789'],
        ];
    }

    /**
     * @dataProvider numberProviderForMinus
     */
    public function testMinus($num1, $num2, $expected): void
    {
        $this->assertEquals($expected, $this->gmpCalculator->minus($num1, $num2));
        $this->assertEquals($expected, $this->bcMathCalculator->minus($num1, $num2));
    }

    public function numberProviderForMul(): array
    {
        return [
            ['123456789', '123456789000000', '15241578750190521000000'],
            ['123456789', '-123456789000000', '-15241578750190521000000'],
            ['-123456789', '-123456789000000', '15241578750190521000000'],
            ['-123456789', '123456789000000', '-15241578750190521000000'],
        ];
    }

    /**
     * @dataProvider numberProviderForMul
     */
    public function testMul($num1, $num2, $expected): void
    {
        $this->assertEquals($expected, $this->gmpCalculator->mul($num1, $num2));
        $this->assertEquals($expected, $this->bcMathCalculator->mul($num1, $num2));
    }

    public function numberProviderForDivide(): array
    {
        return [
            ['123456789000000', '123456789', '1000000'],
            ['123456789000000', '-123456789', '-1000000'],
            ['-123456789000000', '-123456789', '1000000'],
            ['-123456789000000', '123456789', '-1000000'],
        ];
    }

    /**
     * @dataProvider numberProviderForDivide
     */
    public function testDivide($num1, $num2, $expected): void
    {
        $this->assertEquals($expected, $this->gmpCalculator->divide($num1, $num2));
        $this->assertEquals($expected, $this->bcMathCalculator->divide($num1, $num2));
    }
}
