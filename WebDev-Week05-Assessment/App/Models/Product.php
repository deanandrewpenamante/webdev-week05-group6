<?php

namespace App\Models;

use App\Contracts\Discountable;

class Product implements Discountable
{
    private string $name;
    private float $price;
    private int $stock;

    public function __construct(
        string $name,
        float $price,
        int $stock
    ) {
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getStock(): int
    {
        return $this->stock;
    }

    public function isAvailable(): bool
    {
        return $this->stock > 0;
    }

    public function applyDiscount(float $percentage): float
    {
        return $this->price - ($this->price * ($percentage / 100));
    }
}