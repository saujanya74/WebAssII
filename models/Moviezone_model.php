<?php 
	/**
	* 
	*/
	class Moviezone_model extends Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function getmovies()
		{
			$stm = $this->db->prepare("select * from movie_detail order by movie_id desc limit 0, 10");
			$stm->execute();

			return $data = $stm->fetchAll();
		}
		public function getallmovies()
		{
			$stm = $this->db->prepare("select * from movie_detail order by movie_id desc");
			$stm->execute();

			return $data = $stm->fetchAll();
		}

		// FOR ACTOR SEARCH PAGE
		public function getactor()
		{
			$stm = $this->db->prepare("select * from actor order by actor_name asc");
			$stm->execute();

			return $data = $stm->fetchAll();
		}
		public function getactormovies($actorid)
		{
			$stm = $this->db->prepare("select * from movie_detail where movie_id in (select movie_id from movie_actor where actor_id = '$actorid') order by movie_id desc");
			$stm->execute();

			return $data = $stm->fetchAll();
		}
		public function getactorname($actorid)
		{
			$stm = $this->db->prepare("select * from actor where actor_id = '$actorid'");
			$stm->execute();

			return $data = $stm->fetch();
		}

		// FOR DIRECTOR SEARCH PAGE
		public function getdirector()
		{
			$stm = $this->db->prepare("select * from director order by director_name asc");
			$stm->execute();

			return $data = $stm->fetchAll();
		}
		public function getdirectormovies($directorid)
		{
			$stm = $this->db->prepare("select * from movie_detail where director_id = '$directorid' order by movie_id desc");
			$stm->execute();

			return $data = $stm->fetchAll();
		}
		public function getdirectorname($directorid)
		{
			$stm = $this->db->prepare("select * from director where director_id = '$directorid'");
			$stm->execute();

			return $data = $stm->fetch();
		}

		// FOR GENRE SEARCH PAGE
		public function getgenre()
		{
			$stm = $this->db->prepare("select * from genre order by genre_name asc");
			$stm->execute();

			return $data = $stm->fetchAll();
		}
		public function getgenremovies($genreid)
		{
			$stm = $this->db->prepare("select * from movie_detail where genre_id = '$genreid' order by movie_id desc");
			$stm->execute();

			return $data = $stm->fetchAll();
		}
		public function getgenrename($genreid)
		{
			$stm = $this->db->prepare("select * from genre where genre_id = '$genreid'");
			$stm->execute();

			return $data = $stm->fetch();
		}

		// FOR CLASSIFICATION SEARCH PAGE
		public function getclassification()
		{
			$stm = $this->db->prepare("select distinct(classification) as classification from movie order by classification asc");
			$stm->execute();

			return $data = $stm->fetchAll();
		}
		public function getclassificationmovies($classification)
		{
			$stm = $this->db->prepare("select * from movie_detail where classification = '$classification' order by movie_id desc");
			$stm->execute();

			return $data = $stm->fetchAll();
		}
		// public function getgenrename($genreid)
		// {
		// 	$stm = $this->db->prepare("select * from genre where genre_id = '$genreid'");
		// 	$stm->execute();

		// 	return $data = $stm->fetch();
		// }
	}
?>