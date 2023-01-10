<?php

use Doctrine\Helper\EntityManagerCreator;
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;

require_once 'vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

$commands = [
];

ConsoleRunner::run(
    new SingleManagerProvider($entityManager),
    $commands
);