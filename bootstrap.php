<?php

declare(strict_types=1);

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

require __DIR__ . '/vendor/autoload.php';

//crete simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;

$config = Setup::createAnnotationMetadataConfiguration([__DIR__ . '/src'], $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);

//database configuration parameters
$conn = [
    'driver' => 'pdo_mysql',
    'dbname' => 'doctrine_orm',
    'user' => 'root',
    'password' => 'qwertyui',
    'host' => '127.0.0.1:3307'
];

//obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);
