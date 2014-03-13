<?php
	include_once __DIR__ .'/../inc/functions.php';
	 
	class Users  {
			static public  function Get($id = null)
			{
				if($id == null){
					// Get all records
					print_r("all");
					$sql  = "SELECT * FROM 2014Spring_Users U Join 2014Spring_Keywords K ON U.UserType = K.id";
					return fetch_all(sql);
				}else{
					// Get an record
				}
			}
			static public function Create($row)
			{
				
			}
			static public function Blank()
			{
				return array( 'id' => null);
			}
			static public function Update($row)
			{
				
			}
			static public function Delete($id)
			{
				
			}
			static public function Validate($row)
			{
				
			}
		}
	
	
