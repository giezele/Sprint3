<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src/models"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);


//update value if git-cloned repo to other than Ampps/www/Sprint3 directory 
define('ROOT_PATH', '/Sprint3'); 

// database configuration parameters
$conn = array(
    'driver'   => 'pdo_mysql',
    'host'     => '127.0.0.1',
    'dbname'   => 'sprint3',
    'user'     => 'root',
    'password' => ''
);



// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);