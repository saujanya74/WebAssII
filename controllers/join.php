<?php  
	/**
	* 
	*/
	class Join extends Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function index() {
			$this->view->newrelease = $this->model->getnewrelease();
			$this->view->render('join/index');
		}
	}
?>