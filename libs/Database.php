<?php 
	/**
	 * 
	 */
	class Database extends PDO
	{
		protected $db;

		function __construct()
		{
			try {
				parent::__construct('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);
				// echo "connected to db";
				
			}
			catch (PDOException $e) {
				echo $e->getMessage();
			}
			// parent::__construct('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);
		}
	}
 ?>