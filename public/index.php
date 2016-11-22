<?php

require __DIR__ . '/../vendor/autoload.php';
session_start();

$app = new \Slim\App();

require __DIR__ . '/../src/config/DependencieController.php';
require __DIR__ . '/../src/config/RouteController.php';

// Run app
$app->run();

header('Content-type: application/json');
