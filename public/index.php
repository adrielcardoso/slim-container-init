<?php

require __DIR__ . '/../vendor/autoload.php';
session_start();

$app = new \Slim\App();

require __DIR__ . '/../src/config/DependencieController.php';
require __DIR__ . '/../src/config/RouteController.php';

$app->response->headers->set('Content-Type', 'application/json');
// Run app
$app->run();
