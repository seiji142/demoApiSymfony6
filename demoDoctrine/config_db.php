<?php //config

/*
 * configuracion SGBD
 */

define('DATABASE_HOST', '127.0.0.1');
define('DATABASE_PORT', '3307');
define('DATABASE_DBNAME', 'demoDoctrine');
define('DATABASE_USER', '127.0.0.1');
define('DATABASE_PASSWD', '127.0.0.1');
define('DATABASE_DRIVER', 'pdo_mysql');
define('DATABASE_CHARSET', 'UTF8');

/*
 * configuracion Doctrine
 */

define('PROXY_DIR', '/xampp/tmp');
define('ENTITY_DIR', __DIR__ . '/src/Entity/');
define('DEBUG', false); //muestra consulta SQL por la salida estandar