<?php
	class AppsController extends AppController{
		public $name = "Apps";
				
		public function index(){
			$this->_sc();
			$this->set('title_for_layout', "Apps");
		}
	}
	
?>