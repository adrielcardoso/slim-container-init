<?php 

namespace Service;

Class TarefaService{

	public function parseHome($context, $request, $response, $args = [])
	{
		$args = $request->getQueryParams();

		$em = $context->get('dbconnect');

		$query = $em->createQuery('SELECT u FROM Entity\TarefaEntity u');

		$data =[];
		foreach ($query->getResult() as $key => $value) {
			array_push($data, [
				'id'        => $value->getId(),
				'titulo'    => $value->getTitulo(),
				'descricao' => $value->getDescricao()
			]);
		}

		return $data;
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
}