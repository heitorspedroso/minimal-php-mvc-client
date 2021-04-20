<?php

use heitorspedroso\minimalphpmvcframework\Application;

//now every class if we use it with the correct namespace can be autoloaded
require_once __DIR__ . '/vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$config= [
	'db' => [
		'dsn'=>$_ENV['DB_DSN'],
		'user'=>$_ENV['DB_USER'],
		'password'=>$_ENV['DB_PASSWORD'],
	]
];

$app = new Application(__DIR__, $config);

$app->db->applyMigrations();