<?php

class Sql extends PDO {

	private $conn;

	public function __construct(){
		$this->conn = new PDO("mysql:host=localhost;dbname=db_php7", "root", "");
	}

	private function setParams($statment, $parameters=array()){
		foreach($parameters as $key => $value){
			$this->setParam($key, $value);
		}
	}

	private function setParam($statment, $key, $value){
		$statment->bindParam($key, $value);
	}

	public function query($rawQuery, $params=array()){
		$stmt = $this->conn->prepare($rawQuery);
		$this->setParams($stmt, $params);
		$stmt->execute();
		
		return $stmt;
	}

//	o :array no final significa que esse método retorna um array
	public function select($rawQuery, $params=array()):array
	{
		$stmt = $this->query($rawQuery, $params);
		
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

}
/*DAO = Data Access Object
trabalha com PHP, Orientação a Objeto e Banco de Dados
Trabalha com o PDO*/
?>