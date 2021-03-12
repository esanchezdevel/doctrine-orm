<?php

declare(strict_types=1);

use App\Entity\Product;
use App\Entity\User;
use Doctrine\ORM\EntityManager;

require_once __DIR__ . '/bootstrap.php';

/*
 * Relation between users and products:
 * One user have multiple products, each product have one user.
 */

$action = $argv[1];

if ($action === '1') {
    insertNewProductsWithNewUser($entityManager, 'Juanito');
} elseif ($action === '2') {
    $id = $argv[2];
    insertNewProductsExistingUser($entityManager, $id);
} else {
    echo 'action not recognized' . PHP_EOL;
}

function insertNewProductsExistingUser(EntityManager $entityManager, string $id): void
{

    /** @var User $user */
    $user = $entityManager->find('App\Entity\User', intval($id));

    $product = new Product();
    $product->setName('produuuuct');
    $product->setUser($user);

    $entityManager->persist($product);
    $entityManager->flush();

    echo 'done' . PHP_EOL;
}


function insertNewProductsWithNewUser(EntityManager $entityManager, string $userName): void
{
    $user = new User();
    $user->setName($userName);

    $product = new Product();

    $product->setName('product1 ' . $userName);
    $product->setUser($user);

    $product2 = new Product();

    $product2->setName('product1 ' . $userName);
    $product2->setUser($user);


    /*
     * Only insert the product objects, and
     * doctrine automatically insert the user
     */
    $entityManager->persist($product);
    $entityManager->persist($product2);
    $entityManager->flush();
    echo 'done' . PHP_EOL;
}
