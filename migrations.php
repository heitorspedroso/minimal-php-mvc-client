<?php

use heitorspedroso\minimalphpmvcframework\Application;

//now every class if we use it with the correct namespace can be autoloaded
require_once __DIR__ . '/vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$config= [
	'userClass'=> \app\models\User::class,
	'db' => [
		'dsn'=>$_ENV['DB_DSN'],
		'user'=>$_ENV['DB_USER'],
		'password'=>$_ENV['DB_PASSWORD'],
	]
];

$app = new Application(dirname(__DIR__).'/minimal-php-mvc-client', $config);

$app->db->applyMigrations();