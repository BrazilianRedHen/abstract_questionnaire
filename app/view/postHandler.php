<?php

require '../controller/UsuarioController.php';

switch ($_POST['method']) {
	case 'userRegistration':
		UsuarioController::salvaUsuario($_POST);
		break;
	
	default:
		# code...
		break;
}