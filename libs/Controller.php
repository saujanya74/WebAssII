<?php 
/**
 * 
 */
class Controller
{
	
	public function __construct()
	{
		$this->view = new View();
	}

	public function loadModel($name)
	{
		$path = "models/".ucfirst($name)."_model.php";
		if(file_exists($path))
		{
			require $path;
			$modelname = $name."_model";
			$this->model = new $modelname;
		}
	}
}

?>