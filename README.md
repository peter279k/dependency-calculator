# Dependency Calculator

[![Build Status](https://travis-ci.org/peter279k/dependency-calculator.svg?branch=master)](https://travis-ci.org/peter279k/dependency-calculator)
[![Coverage Status](https://coveralls.io/repos/github/peter279k/dependency-calculator/badge.svg?branch=master)](https://coveralls.io/github/peter279k/dependency-calculator?branch=master)

## Introduction
- This is the demonsration for [SITCON 2019 talk](https://sitcon.org/2019/agenda/48cc5d8a-30c4-4310-b9f4-0411096c617e/).

## Usage
Here is some examples about how to calculate two numbers.

### Add two numbers
```php
use Lee\Calculator\Calculator;
use Lee\Calculator\modules\GmpCalculator;
use Lee\Calculator\modules\BcMathCalculator;

$gmpCalculator = new Calculator(new GmpCalculator());
$bcMathCalculator = new Calculator(new BcMathCalculator());

echo $gmpCalculator->add('123456789', '123456789000000'); // 123456912456789
echo $bcMathCalculator->add('123456789', '123456789000000'); // 123456912456789
```

### Minus two numbers
```php
use Lee\Calculator\Calculator;
use Lee\Calculator\modules\GmpCalculator;
use Lee\Calculator\modules\BcMathCalculator;

$gmpCalculator = new Calculator(new GmpCalculator());
$bcMathCalculator = new Calculator(new BcMathCalculator());

echo $gmpCalculator->minus('123456789', '123456789000000'); // -123456665543211
echo $bcMathCalculator->minus('123456789', '123456789000000'); // -123456665543211
```

### Multiple two numbers
```php

use Lee\Calculator\Calculator;
use Lee\Calculator\modules\GmpCalculator;
use Lee\Calculator\modules\BcMathCalculator;

$gmpCalculator = new Calculator(new GmpCalculator());
$bcMathCalculator = new Calculator(new BcMathCalculator());

echo $gmpCalculator->mul('123456789', '123456789000000'); // 15241578750190521000000
echo $bcMathCalculator->mul('123456789', '123456789000000'); // 15241578750190521000000
```

### Divide two numbers
```php

use Lee\Calculator\Calculator;
use Lee\Calculator\modules\GmpCalculator;
use Lee\Calculator\modules\BcMathCalculator;

$gmpCalculator = new Calculator(new GmpCalculator());
$bcMathCalculator = new Calculator(new BcMathCalculator());

echo $gmpCalculator->divide('123456789000000', '123456789'); // 1000000
echo $bcMathCalculator->divide('123456789000000', '123456789'); // 1000000
```
