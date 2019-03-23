<?php

namespace Lee\Calculator;

use Lee\Calculator\interfaces\Calculator as CalculatorInterface;

class Calculator
{
    private $calculator;

    public function __construct(CalculatorInterface $calculator)
    {
        $this->calculator = $calculator;
    }

    public function add(string $num1, string $num2): string
    {
        return $this->calculator->add($num1, $num2);
    }

    public function minus(string $num1, string $num2): string
    {
        return $this->calculator->minus($num1, $num2);
    }

    public function mul(string $num1, string $num2): string
    {
        return $this->calculator->mul($num1, $num2);
    }

    public function divide(string $num1, string $num2): string
    {
        return $this->calculator->divide($num1, $num2);
    }
}
