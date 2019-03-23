<?php

namespace Lee\Calculator\modules;

use Lee\Calculator\interfaces\Calculator;

class BcMathCalculator implements Calculator
{
    public function add(string $num1, string $num2): string
    {
        return \bcadd($num1, $num2);
    }

    public function minus(string $num1, string $num2): string
    {
        if ($num2[0] === '-') {
            $num2 = \substr($num2, 1);
        } else {
            $num2 = '-' . $num2;
        }

        return \bcadd($num1, $num2);
    }

    public function mul(string $num1, string $num2): string
    {
        return \bcmul($num1, $num2);
    }

    public function divide(string $num1, string $num2): string
    {
        if ((int)$num2 === 0) {
            throw new \InvalidArgumentException('The zero operand not allowed!');
        }

        return \bcdiv($num1, $num2);
    }
}
