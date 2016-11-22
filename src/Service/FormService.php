<?php 

namespace Service;

Class FormService{

	public function dataBind($body, $entity)
	{
		foreach ($body as $key => $value) {
			if(method_exists($entity, "set{$key}")){
				$entity->{"set{$key}"}($value);
			}
		}

		return $entity;
	}

	public function formRaw()
	{
		return json_decode(file_get_contents("php://input"), true); 
	}
}