<?php

namespace App\Models;

class Category
{
    private string $name;
    private string $description;
    private array $products = [];

    public function __construct(
        string $name,
        string $description
    ) {
        $this->name = $name;
        $this->description = $description;
    }

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getProductCount(): int
    {
        return count($this->products);
    }
}