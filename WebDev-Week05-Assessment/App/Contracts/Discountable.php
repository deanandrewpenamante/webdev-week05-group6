<?php

namespace App\Contracts;

interface Discountable
{
    public function applyDiscount(float $percentage): float;
}