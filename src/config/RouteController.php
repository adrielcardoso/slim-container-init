<?php


/**
*@path http://localhost/miniProjeto/public
*@Method GET
*/
$app->get('/', function ($request, $response, $args = []) 
{
	$service = $this->get('tarefaService');

	$result = $service->parseHome($this, $request, $response, $args);

	return $this->get('serializer')->serialize($result, 'json');
});



/**
*@path http://localhost/miniProjeto/public
*@Method POST
*/
$app->post('/', function ($request, $response, $args = []) 
{
	$service = $this->get('formService');

	$entity = $service->dataBind($service->formRaw(), new Entity\TarefaEntity());

	$tarefaService = $this->get('tarefaService')->create($this, $entity);

	return $this->get('serializer')->serialize($tarefaService, 'json');
});



/**
*@path http://localhost/miniProjeto/public
*@Method PUT
*/
$app->put('/{id}', function ($request, $response, $args = []) 
{
	$service = $this->get('formService');

	$tarefaEntity = $this->get('dbconnect')->find('Entity\TarefaEntity', $args['id']);

	$dataBind = $service->formRaw();
	if(isset($dataBind['id'])){
		unset($dataBind['id']);
	}

	$entity = $service->dataBind($service->formRaw(), $tarefaEntity);
	$tarefaService = $this->get('tarefaService')->create($this, $entity);

	return $this->get('serializer')->serialize($tarefaService, 'json');
});


/**
*@path http://localhost/miniProjeto/public
*@Method DELETE
*/
$app->delete('/{id}', function ($request, $response, $args = []) 
{
	$service = $this->get('formService');

	$tarefaEntity = $this->get('dbconnect')->find('Entity\TarefaEntity', $args['id']);

	$tarefaService = $this->get('tarefaService')->delete($this, $tarefaEntity);

	return $this->get('serializer')->serialize($tarefaService, 'json');
});





