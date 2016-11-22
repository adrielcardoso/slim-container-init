<?php

class MyUserClass
{
	public function getUserList($args = [])
	{
		 $dbconn = new \PDO('localhost','user','password');
		 $sql = 'select name from user ';

		 if(isset($args['limit']) and isset($args['offset'])){
		 	$sql .= " LIMIT = :limit OFFSET :offset";
		 }

		 $temp = $dbconn->prepare($sql);

		 if(isset($args['limit']) and isset($args['offset'])){
			$temp->bindValue(':limit', (int) $args['limit'], PDO::PARAM_INT);
			$temp->bindValue(':offset', (int) $args['offset'], PDO::PARAM_INT);
		 }

		 $temp->execute();
		 return $temp->fetchAll();
	}
}

