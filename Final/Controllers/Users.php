<?php
	include_once __DIR__ . '/../inc/functions.php';
	include_once __DIR__ . '/../inc/allModels.php';
    print_r("1");
	@$view = $action = $_REQUEST['action'];
	@$format = $_REQUEST['format'];
	print_r("2");

	switch ($action){
		case 'create':
			break;
		case 'update':
			break;
		case 'delete':
			break;
	
		default:
			print_r("3");
			
			$model = Users::Get();
			if($view === null)$view = 'index';
			
	}
	switch (variable) {
		case 'plain':
			print_r("4");
			
		    include __DIR__ . "/../Views/Users/$view.php";	
			break;
		
		default:
			print_r("5");
			
			$view = __DIR__ . "/../Views/Users/$view.php";
			print_r("6");
			
			include __DIR__ . "/../Views/Shared/_Layout.php";
			break;
	}