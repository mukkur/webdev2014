<?php
	include_once __DIR__ . '/../inc/functions.php';
	include_once __DIR__ . '/../inc/allModels.php';

	@$view = $action = $_REQUEST['action'];
	@$format = $_REQUEST['format'];



	switch ($action){
		case 'create':
			break;
		case 'update':
			break;
		case 'delete':
			break;
		default:
			if($view == null) $view = 'index';
			$model = Users::Get();
	}

	switch ($format) {
		case 'plain':
			include __DIR__ . "/../Views/Product_Keywords/$view.php";			
			break;
		default:
			$view = __DIR__ . "/../Views/Product_Keywords/$view.php";	
			include __DIR__ . "/../Views/Shared/_Layout.php";
			break;
	}