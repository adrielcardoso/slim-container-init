<?php

// lazy load referencias 
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Service;

$container = $app->getContainer();

// conectar banco de dados 
$container['dbconnect'] = function ($c) 
{
	$host = 'xxx';
	$user = 'xxx';
	$database = 'xxx';
	$passw = 'xxx';

	$paths = array("/../Entity");
	$isDevMode = true;

	// the connection configuration
	$dbParams = array(
	    'driver'   => 'pdo_mysql',
	    'user'     => $user,
	    'password' => $passw,
	    'dbname'   => $database,
	    'host'     => $host
	);

	$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
	return EntityManager::create($dbParams, $config);
};

// service de tarefas 
$container['tarefaService'] = function ($c) 
{
    return new Service\TarefaService();
};

// service de tarefas 
$container['formService'] = function ($c) 
{
    return new Service\FormService();
};

// śerialize de objectos
$container['serializer'] = function ($result) 
{
	$normalizer = new ObjectNormalizer();
	$encoder = new JsonEncoder();

	return new Serializer(array($normalizer), array($encoder));
};

// Exercício 1
$container['fizBuzService'] = function ($c) 
{
    return new Service\FizBuzService();
};







