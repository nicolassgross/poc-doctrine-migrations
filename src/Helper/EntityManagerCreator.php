<?php

namespace Doctrine\Helper;

include_once "vendor/autoload.php";

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

class EntityManagerCreator
{
    public static array $arrConexaobanco = [
        'driver' => 'pdo_mysql',
        'user' => 'root',
        'password' => '',
        'dbname' => 'doctrine',
    ];

   public static function createEntityManager(): EntityManager
   {
    $config = ORMSetup::createXMLMetadataConfiguration(
        [__DIR__."../../../config/xml"],
        true
    );

    $connection = self::$arrConexaobanco;

    return EntityManager::create($connection, $config);
   }
}