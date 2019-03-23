<?php

namespace Lee\Calculator\modules;

use Lee\Calculator\interfaces\Calculator;

class GmpCalculator implements Calculator
{
    public function add(string $num1, string $num2): string
    {
        return \gmp_add($num1, $num2);
    }

    public function minus(string $num1, string $num2): string
    {
        if ($num2[0] === '-') {
            $num2 = \substr($num2, 1);
        } else {
            $num2 = '-' . $num2;
        }

        return \gmp_add($num1, $num2);
    }

    public function mul(string $num1, string $num2): string
    {
        return \gmp_mul($num1, $num2);
    }

    public function divide(string $num1, string $num2): string
    {
        if ((int)$num2 === 0) {
            throw new \InvalidArgumentException('The zero operand not allowed!');
        }

        return \gmp_div($num1, $num2);
    }
}
