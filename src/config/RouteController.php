<?php


/**
*	@Method GET
*
* 	request: http://localhost/miniProjeto/public/tarefa
*
*	response: 
*
*	[
*	   {
*	      "id":7,
*	      "titulo":"asdddd",
*	      "descricao":"asdsadasd"
*	   },
*	   {
*	      "id":8,
*	      "titulo":"asdddd",
*	      "descricao":"asdsadasd"
*	   }
*	]
*
*	... 
*
**/
$app->get('/tarefa', function ($request, $response, $args = []) 
{
	$service = $this->get('tarefaService');

	$result = $service->parseHome($this, $request, $response, $args);

	return $this->get('serializer')->serialize($result, 'json');
});


/**
*	@Method GET
*
* 	request: http://localhost/miniProjeto/public/tarefa/{id}
*
*	response: 
*
*	[
*	   {
*	      "id":7,
*	      "titulo":"asdddd",
*	      "descricao":"asdsadasd"
*	   }
*	]
*
*	... 
*
**/
$app->get('/tarefa/{id}', function ($request, $response, $args = []) 
{
	$tarefaEntity = $this->get('dbconnect')->find('Entity\TarefaEntity', $args['id']);

	return $this->get('serializer')->serialize(
		isset($tarefaEntity) ? $tarefaEntity : [], 'json');
});




/**
*	@Method POST
*
* 	request: http://localhost/miniProjeto/public/tarefa
*	{
*		"titulo" : "Nome do titulo", 
*		"descricao" : "descricao"
*	}
*
*
*	response: 
*
*	[
*	   {
*	      "id":1,
*	      "titulo":"Nome do titulo",
*	      "descricao":"descricao"
*	   }
*	]
*
*	... 
*
**/
$app->post('/tarefa', function ($request, $response, $args = []) 
{
	$service = $this->get('formService');

	$entity = $service->dataBind($service->formRaw(), new Entity\TarefaEntity());

	$tarefaService = $this->get('tarefaService')->create($this, $entity);

	return $this->get('serializer')->serialize($entity, 'json');
});



/**
*	@Method PUT
*
* 	request: http://localhost/miniProjeto/public/tarefa/{id}
*	{
*		"titulo" : "Nome do titulo2", 
*		"descricao" : "descricao2"
*	}
*
*
*	response: 
*
*	[
*	   {
*	      "id":1,
*	      "titulo":"Nome do titulo2",
*	      "descricao":"descricao2"
*	   }
*	]
*
*	... 
*
**/
$app->put('/tarefa/{id}', function ($request, $response, $args = []) 
{
	$service = $this->get('formService');

	$tarefaEntity = $this->get('dbconnect')->find('Entity\TarefaEntity', $args['id']);

	$dataBind = $service->formRaw();
	if(isset($dataBind['id'])){
		unset($dataBind['id']);
	}

	$entity = $service->dataBind($service->formRaw(), $tarefaEntity);
	$tarefaService = $this->get('tarefaService')->update($this, $entity);

	return $this->get('serializer')->serialize($tarefaService, 'json');
});


/**
*	@Method DELETE
*
* 	request: http://localhost/miniProjeto/public/tarefa/{id}
*
*	response: 
*
*	[
*	   {
*	      "id":1,
*	      "titulo":"Nome do titulo2",
*	      "descricao":"descricao2"
*	   }
*	]
*
*	... 
*
**/
$app->delete('/tarefa/{id}', function ($request, $response, $args = []) 
{
	$service = $this->get('formService');

	$tarefaEntity = $this->get('dbconnect')->find('Entity\TarefaEntity', $args['id']);

	$tarefaService = $this->get('tarefaService')->delete($this, $tarefaEntity);

	return $this->get('serializer')->serialize($tarefaService, 'json');
});





