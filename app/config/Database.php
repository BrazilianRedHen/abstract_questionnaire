<?php

class Database
{
	var $conexao = '';
	var $tipo = '';

  	public function __construct() {

		
		$dbhost = '127.0.0.1';
		$port 	   = 3306;
		$dbname    = 'srm';
		$dbuser    = 'root';
		$dbpass    = '';

		$this->conexao = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname,$port) or die('Falha na Conexão com o Banco de Dados.'. mysqli_connect_error());

	   	mysqli_set_charset($this->conexao, "utf8");

		
	}

	function query($sql){

		$result = mysqli_query($this->conexao, $sql)or die(mysqli_error($this->conexao));

		return $result;
	}

	function  insertQuery($sql){

		mysqli_query($this->conexao,  $sql)or die(mysqli_error($this->conexao));
		$result = mysqli_insert_id($this->conexao);

		return $result;

	}


	/* retornar dados em matriz - para querys que retornam mais de uma linha */
	function resultArray($result){
		
		$rows = array();


		while($row = mysqli_fetch_array($result, MYSQL_ASSOC)){
			$rows[] = $row;
		}

		return $rows;

	}

	/* resulado direto de uma linha - para querys que retornam apenas 1 linha*/

	function resultRow($result){

		$row = mysqli_fetch_array($result, MYSQL_ASSOC);
		return $row;

	}
}