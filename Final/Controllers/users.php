<?php
	include_once __DIR__ . '/../inc/functions.php';
	include_once __DIR__ . '/../inc/allModels.php';

	@$action = $_REQUEST['action'];

	switch ($action){
		case 'index':
			break;
		default:
			$model = Users::Get();
			include __DIR__ . "/../Views/Users/$action.php";
	}