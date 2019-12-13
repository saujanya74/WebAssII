<?php 
	/**
	* 
	*/
	class Admin extends Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			$this->view->render('admin/index',true,true);
		}
	}
?>