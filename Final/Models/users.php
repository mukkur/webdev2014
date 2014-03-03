<?php
	include_once __DIR__ .'/../inc/functions.php';
	 
	class Users  {
			static public  function Get($id = null)
			{
				if($id == null){
					// Get all records
					print_r("all");
					return fetch_all("SELECT * FROM 2014Spring_Users");
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
	
	
