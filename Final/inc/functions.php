<?php
	include_once __DIR__ . '/password.php';

	function GetConnection(){
		global $password;

		$conn = mysqli_connect('localhost', 'mukkur1', $password, 'mukkur1_db');
		return $conn;
	}
	$conn = GetConnection();   
	print_r($conn);
	 echo 'Test';