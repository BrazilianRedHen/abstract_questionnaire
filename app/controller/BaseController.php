<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'dbmysql.php';

class BaseController {
	//LOCAL
	static public $caminho_aplicacao = "/var/www/html/astract_questionnaire";

	static public function VerificaAutenticacao($pagina_id, $permissoes_usuario){
		if(in_array($pagina_id, $permissoes_usuario)){
			return true;
		}else{
			return false;
		}
	}
}