<?php
	class HomeController extends AppController{
		public $name = "Home";
				
		public function index(){
			$this->_sc();
			$this->set('title_for_layout', "Home");
		}
	}
	
?>