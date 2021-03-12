<?php

declare(strict_types=1);

require_once __DIR__ . '/bootstrap.php';

//when execute the script pass the id of the product that you want to search
$id = $argv[1];

$product = $entityManager->find('App\Entity\Product', $id);

if ($product === null) {
    echo 'Product not found' . PHP_EOL;
    exit(1);
}

echo sprintf('Product: %s%s', $product->getName(), PHP_EOL);
