<?php
	include_once __DIR__ . '/../inc/functions.php';

	class Products  {

		static public function Get($id = null, $category_id = null)
		{
			$sql = "SELECT *
					FROM 2013Fall_Products
				   ";
			if($id){
				// Get one record
				$sql .= " WHERE id = $id ";
				if(($results = fetch_all($sql)) && count($results) > 0){
					return $results[0];
				}else{
					return null;
				}
			}elseif($category_id){
				$sql .= " WHERE Product_Category_id = $category_id ";
				return fetch_all($sql);
			}else{
				//	Get all records
				return fetch_all($sql);
			}
		}

		static public function GetCategories()
		{
			$sql = "SELECT * FROM 2013Fall_Product_Categories";
			return fetch_all($sql);
		}

		static public function Save(&$row)
		{
			throw new Exception("Not Implemented", 1);

			return $error ? array ('sql error' => $error) : false;
		}

		static public function Blank()
		{
			return array( 'id' => null);
		}

		static public function Delete($id)
		{
			$conn = GetConnection();
			$sql = "DELETE FROM 2013Fall_Products WHERE id = $id";
			//echo $sql;
			$results = $conn->query($sql);
			$error = $conn->error;
			$conn->close();

			return $error ? array ('sql error' => $error) : false;
		}

		static public function Validate($row)
		{
			$errors = array();
			if(empty($row['Name'])) $errors['Name'] = "is required";

			return count($errors) > 0 ? $errors : false ;
		}

	}




