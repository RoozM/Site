<?php
	class AboutController extends AppController{
		public $name = "About";
				
		public function index(){
			$this->_sc();
			$this->set('title_for_layout', "About");
		}
	}
	
?>