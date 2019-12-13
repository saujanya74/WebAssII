<?php 
	class View 
	{
		
		function __construct()
		{
			
		}

		public function render($name,$no_sidebar = false,$no_nav = false)
		{
			require 'views/header.php';
			if($no_nav == false)
				require 'views/navbar.php';
			if($no_sidebar == false)
				require 'views/sidebar.php';
			require 'views/'.$name.'.php';
			require 'views/footer.php';
		}
	}
?>