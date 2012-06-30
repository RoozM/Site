<?php
	class ContactController extends AppController{
		public $name = "Contact";
				
		public function index(){
			$this->_sc();
			$this->set('title_for_layout', "Contact");
		}
	}
	
?>