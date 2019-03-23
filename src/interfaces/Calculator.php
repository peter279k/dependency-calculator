<?php

namespace Lee\Calculator\interfaces;

interface Calculator
{
    public function add(string $num1, string $num2): string;
    public function minus(string $num1, string $num2): string;
    public function mul(string $num1, string $num2): string;
    public function divide(string $num1, string $num2): string;
}
