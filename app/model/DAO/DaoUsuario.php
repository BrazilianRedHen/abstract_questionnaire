<?php

require_once "repository/RepositoryUsuario.php";

class DaoUsuario implements RepositoryUsuario{

	public function Save($object) {
		

		//PLACEHOLDER!
		if( is_numeric($object->getId()) ){

			$string_senha = $object->getSenha();
			if(!empty($string_senha)) {
				$string_senha = ", senha = '".$object->getSenha()."'";
			}

			$sql = "UPDATE usuario set nome = '".$object->getNome()."', usuario = '".$object->getUsuario()."'".$string_senha.", ambiente_id = ".$object->getAmbiente()->getId().", ativo = ".$object->getAtivo()." WHERE id = ".$object->getId();

		}else {
			$sql = "INSERT INTO usuario (nome, usuario, senha, ambiente_id, ativo) VALUES ('".$object->getNome()."', '".$object->getUsuario()."', '".$object->getSenha()."', ".$object->getAmbiente()->getId().", ".$object->getAtivo()." )";
		}

		$db = new Database();

		$insertid = $db->insert_query($sql);

		return $insertid;
		//fim PLACEHOLDER!

	}

	public function Update($object) {
		return "Implementar";
	}

	public function Delete($condicao) {
		return "Implementar";
	}

	public function FindById($campos = null) {
		return "Implementar";
	}

}


?>