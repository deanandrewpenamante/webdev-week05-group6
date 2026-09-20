<?php

require __DIR__ . '/vendor/autoload.php';

use App\Models\Product;
use App\Models\Category;

$product1 = new Product(
    "Laptop",
    45000.00,
    5
);

$product2 = new Product(
    "Wireless Mouse",
    850.00,
    0
);

$electronics = new Category(
    "Electronics",
    "Computer and electronic accessories"
);

$electronics->addProduct($product1);
$electronics->addProduct($product2);

echo "===== PRODUCT INVENTORY SYSTEM =====" . PHP_EOL;
echo PHP_EOL;

echo "Product 1: " . $product1->getName() . PHP_EOL;
echo "Price: PHP " . number_format($product1->getPrice(), 2) . PHP_EOL;
echo "Stock: " . $product1->getStock() . PHP_EOL;
echo "Available: " . ($product1->isAvailable() ? "Yes" : "No") . PHP_EOL;

$discountedPrice = $product1->applyDiscount(10);

echo "Price after 10% discount: PHP "
    . number_format($discountedPrice, 2)
    . PHP_EOL;

echo PHP_EOL;

echo "Product 2: " . $product2->getName() . PHP_EOL;
echo "Price: PHP " . number_format($product2->getPrice(), 2) . PHP_EOL;
echo "Stock: " . $product2->getStock() . PHP_EOL;
echo "Available: " . ($product2->isAvailable() ? "Yes" : "No") . PHP_EOL;

echo PHP_EOL;

echo "Category: " . $electronics->getName() . PHP_EOL;
echo "Description: " . $electronics->getDescription() . PHP_EOL;
echo "Number of products: "
    . $electronics->getProductCount()
    . PHP_EOL;