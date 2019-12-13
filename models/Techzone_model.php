<?php
	/**
	* 
	*/
	class Techzone_model extends Model
	{
		
		function __construct()
		{
			parent::__construct();
			$this->getnewrelease();
		}
		public function getnewrelease()
		{
			$stm = $this->db->prepare("select * from movie_detail order by RAND() limit 0,2");
			$stm->execute();

			return $data = $stm->fetchAll();
		}
	}
?>