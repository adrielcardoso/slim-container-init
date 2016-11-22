<?php 

namespace Service;

Class TarefaService{

	public function parseHome($context, $request, $response, $args = [])
	{
		$args = $request->getQueryParams();

		$em = $context->get('dbconnect');

		$query = $em->createQuery('SELECT u FROM Entity\TarefaEntity u');

		return $query->getResult();
	}

	public function create($context, $entity)
	{
		$em = $context->get('dbconnect');
		
		$em->persist($entity);

	    $em->flush();

	    return $entity;
	}

	public function delete($context, $entity)
	{
		$em = $context->get('dbconnect');
			
		$id = $entity->getId();
		$em->remove($entity);

	    $em->flush();

	    return ['message' => 'removido a tarefa ' . $id];
	}

	public function update($context, $entity)
	{
		$em = $context->get('dbconnect');
		
		$em->persist($entity);

	    $em->flush();

	    return $entity;
	}
}