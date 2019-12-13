<?php
	/**
	* 
	*/
	class Moviezone extends Controller
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function index() {
			$this->view->movieslist = $this->model->getmovies();
			$this->view->render('moviezone/index',true);
		}
		public function showall() {
			$this->view->movieslist = $this->model->getallmovies();
			$this->view->render('moviezone/showall',true);
		}
		public function newreleases() {
			$this->view->movieslist = $this->model->getmovies();
			$this->view->render('moviezone/index',true);
		}
		public function actor() {
			$this->view->actorlist = $this->model->getactor();
			if(isset($_POST['btnSubmit'])) {
				$this->view->movieslist = $this->model->getactormovies($_POST['txtActorID']);
				$this->view->actorname = $this->model->getactorname($_POST['txtActorID']);
			}

			$this->view->render('moviezone/actor',true);
		}

		public function director() {
			$this->view->directorlist = $this->model->getdirector();
			if(isset($_POST['btnSubmit'])) {
				$this->view->movieslist = $this->model->getdirectormovies($_POST['txtDirectorID']);
				$this->view->directorname = $this->model->getdirectorname($_POST['txtDirectorID']);
			}

			$this->view->render('moviezone/director',true);
		}

		public function genre() {
			$this->view->genrelist = $this->model->getgenre();
			if(isset($_POST['btnSubmit'])) {
				$this->view->movieslist = $this->model->getgenremovies($_POST['txtGenreID']);
				$this->view->genrename = $this->model->getgenrename($_POST['txtGenreID']);
			}

			$this->view->render('moviezone/genre',true);
		}

		public function classification() {
			$this->view->classificationlist = $this->model->getclassification();
			if(isset($_POST['btnSubmit'])) {
				$this->view->movieslist = $this->model->getclassificationmovies($_POST['txtClassificationID']);
			}

			$this->view->render('moviezone/classification',true);
		}
	}
?>