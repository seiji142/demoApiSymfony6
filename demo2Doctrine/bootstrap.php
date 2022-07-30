<?php

// bootstrap.php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Configuration;

require_once __DIR__ . "/vendor/autoload.php";

/**
 * Genera el gestor de entidades
 *
 * @return Doctrine\ORM\EntityManager
 */
function GetEntityManager() {
    // Cargar configuracion de la conexion
    /* $dbParams = array(
      'host' => $_ENV['DATABASE_HOST'],
      'port' => $_ENV['DATABASE_PORT'],
      'dbname' =>  $_ENV['DATABASE_DBNAME'],
      'user' =>  $_ENV['DATABASE_USER'],
      'password' =>  $_ENV['DATABASE_PASSWD'],
      'driver' =>  $_ENV['DATABASE_DRIVER'],
      'charset' =>  $_ENV['DATABASE_CHARSET']
      );

      DATABASE_HOST = '127.0.0.1'
      DATABASE_PORT = '3307'
      DATABASE_DBNAME = 'demoDoctrine'
      DATABASE_USER ='root'
      DATABASE_PASSWD = ''
      DATABASE_DRIVER = 'pdo_mysql'
      DATABASE_CHARSET = 'UTF8' */

    $dbParams = array(
        'host' => '127.0.0.1',
        'port' => '3307',
        'dbname' => 'demoDoctrine',
        'user' => 'root',
        'password' => '',
        'driver' => 'pdo_mysql',
        'charset' => 'UTF8'
    );


    /* $config = Setup::createAnnotationMetadataConfiguration(
      array($_ENV['ENTITY_DIR']), //paths to mapped entities
      $_ENV['DEBUG'], //developper mode
      ini_get('sys_temp_dir'), //Proxy dir
      null, //Cache implementation
      false            //use Simple Annotation Reader
      ); */
    /* ENTITY_DIR = './src/Entity/'
      DEBUG = 0 #muestra consulta SQL por la salida estandar */


    $config = Setup::createAnnotationMetadataConfiguration(
                    array( './src/Entity/'), //paths to mapped entities
                    true, //developper mode
                    ini_get('sys_temp_dir'), //Proxy dir
                    null, //Cache implementation
                    false            //use Simple Annotation Reader
    );

    $config->setAutoGenerateProxyClasses(true);
    if (true) {
        $config->setSQLLogger(new \Doctrine\DBAL\Logging\EchoSQLLogger());
    }
    return EntityManager::create($dbParams, $config);
}
