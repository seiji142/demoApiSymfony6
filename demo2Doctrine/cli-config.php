<?php // cli-config.php

use Doctrine\ORM\Tools\Console\ConsoleRunner;

//echo 'variable entorno: ' . __DIR__;
//echo (defined('__DIR__') ? '__DIR__ is defined' : '__DIR__ is NOT defined' . PHP_EOL);

// Carga las variables de entorno
//$dotenv = Dotenv\Dotenv::createMutable(__DIR__);
/*$rai= dirname(dirname (__DIR__));
$dotenv = new \Dotenv\Dotenv($rai);
$dotenv->load();
$dotenv->required([
    'DATABASE_HOST',
    'DATABASE_DBNAME',
    'DATABASE_USER',
    'DATABASE_PASSWD',
    'DATABASE_DRIVER'
]);*/
//$dotenv = new \Dotenv\Dotenv(__DIR__);
/*$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
try {
    $dotenv->load();

    $mode = getenv('DATABASE_HOST');
    echo'BASE DE DATOS: '.$mode;

   // $_SERVER
    $dotenv->required(['DATABASE_HOST',
                        'DATABASE_PORT',
                        'DATABASE_DBNAME',
                        'DATABASE_USER',
                        'DATABASE_PASSWD',
                        'DATABASE_DRIVER',
                        'DATABASE_CHARSET'])->notEmpty();
} catch ( Exception $e )  {
    echo 'MENSAJE: '.$e->getMessage();
}/*

/*DATABASE_HOST = '127.0.0.1'
DATABASE_PORT = '3307'
DATABASE_DBNAME = 'demoDoctrine'
DATABASE_USER ='root'
DATABASE_PASSWD = ''
DATABASE_DRIVER = 'pdo_mysql'
DATABASE_CHARSET = 'UTF8'*/

require_once __DIR__ . '/bootstrap.php';

$entityManager = GetEntityManager();

return ConsoleRunner::createHelperSet($entityManager);
