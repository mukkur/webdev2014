<?php
	include_once __DIR__.'/../Models/Users.php';
	 
	class Users  {
			static public  function Get($id = null)
			{
				if($id == null){
					// Get all records
					
					return fetch_all("SELECT * FROM USERS");
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
	
	
