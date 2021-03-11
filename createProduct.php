<?php

declare(strict_types=1);

use App\Entity\Product;

require_once 'bootstrap.php';

//get product name from argument passed by console
$newProductName = $argv[1];

$product = new Product();

$product->setName($newProductName);

$entityManager->persist($product); //notify to entityManager to insert the product in the database
$entityManager->flush(); //initiate the action of insert notified to the entityManager

echo 'Created Product with ID ' . $product->getId() . PHP_EOL;
