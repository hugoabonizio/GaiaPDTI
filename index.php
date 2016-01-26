<?php
require 'vendor/autoload.php';

$con = new PDO("sqlite:db/database.sqlite3");
TORM\Connection::setConnection($con);
TORM\Connection::setDriver("sqlite");

$app = new \Framework\Initializer();
if (getenv('BIRDS_ENV') == 'development') {
  $app->public_folder = dirname(__FILE__) . '/public/';
} else {
  \Framework\Application::$url_prefix = '/projetos/gaia-pdti/index.php';
  if ($_SERVER['REQUEST_URI'] == '/projetos/gaia-pdti/') header('Location: ' . \Framework\Application::$url_prefix);
}
$app->run($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
