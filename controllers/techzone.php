<?php 

	/**
	* 
	*/
	class Techzone extends Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function index() {
			$this->view->newrelease = $this->model->getnewrelease();
			$this->view->render('techzone/index');
		}
	}
?>