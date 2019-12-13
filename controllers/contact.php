<?php 
	
	class Contact extends Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			$this->view->newrelease = $this->model->getnewrelease();
			$this->view->render('contact/index');
		}
	}

?>