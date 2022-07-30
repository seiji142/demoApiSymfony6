<?php // bootstrap.php

require_once __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/config_db.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

/**
 * Genera el gestor de entidades
 *
 * @return Doctrine\ORM\EntityManager
 */

function GetEntityManager()
{
    $paths = array(__DIR__ . '/src/config/yaml');
    $isDevMode = true;
   // $paths = array("/path/to/yml-mappings");

    // Configuracion de la conexion
    // Cargar configuracion de la conexion

    $dbParams = array(
        'host' => DATABASE_HOST,
        'port' => DATABASE_PORT,
        'dbname' => DATABASE_DBNAME,
        'user' => DATABASE_USER,
        'password' => DATABASE_PASSWD,
        'driver' => DATABASE_DRIVER,
        'charset' => DATABASE_CHARSET
    );

    //$config = Setup::createYAMLMetadataConfiguration($paths, $isDevMode);
    $config = Setup::createAnnotationMetadataConfiguration(
        array(ENTITY_DIR),
        DEBUG,
        PROXY_DIR,
        null,
        false
    );

    $config->setAutoGenerateProxyClasses(DEBUG);
    if(DEBUG){
        $config->setSQLLogger(new \Doctrine\DBAL\Logging);
    }
    return EntityManager::create($dbParams, $config);
}
// the connection configuration
/*$dbParams = array(
    'driver' => 'pdo_mysql',
    'user' => 'root',
    'password' => '',
    'dbname' => 'foo',
);
*/
//$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
//$entityManager = EntityManager::create($dbParams, $config);