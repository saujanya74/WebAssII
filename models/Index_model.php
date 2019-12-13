<?php 
	/**
	* 
	*/
	class Index_model extends Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function getnewrelease()
		{
			$stm = $this->db->prepare("select * from movie_detail order by RAND() limit 0,2");
			$stm->execute();
			// print_r($stm->fetchAll());
			return $data = $stm->fetchAll();
		}
	}
?>