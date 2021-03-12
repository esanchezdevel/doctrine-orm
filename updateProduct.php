<?php

declare(strict_types=1);

require_once __DIR__ . '/bootstrap.php';

$id = $argv[1];
$name = $argv[2];

$product = $entityManager->find('App\Entity\Product', $id);

if ($product === null) {
    echo 'Product $id does not exist' . PHP_EOL;
    exit(1);
}

$product->setName($name);

$entityManager->flush(); //execute the update

/*
 * In this case is not necessary to execute a persists like in the
 * create script. you only need to update the object getted by the
 * entityManager and flush it.
 */

echo 'Product updated' . PHP_EOL;
