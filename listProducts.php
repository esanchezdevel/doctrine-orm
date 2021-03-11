<?php

declare(strict_types=1);

use App\Entity\Product;

require_once 'bootstrap.php';

//get the repository of the table products (Entity Product)
$productRepository = $entityManager->getRepository('App\Entity\Product');
$products = $productRepository->findAll();

/** @var Product $product */

foreach ($products as $product) {
    echo sprintf('-%s%s', $product->getName(), PHP_EOL);
}
