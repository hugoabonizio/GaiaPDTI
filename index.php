<?php
require 'vendor/autoload.php';

$con = new PDO("sqlite:db/database.sqlite3");
TORM\Connection::setConnection($con);
TORM\Connection::setDriver("sqlite");

$app = new \Framework\Initializer();
$app->public_folder = dirname(__FILE__) . '/public/';
$app->run();
