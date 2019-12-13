<?php 
	
	class Index extends Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			$this->view->newrelease = $this->model->getnewrelease();
			$this->view->render('index/index');
		}
	}

?>